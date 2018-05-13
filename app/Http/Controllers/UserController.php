<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company;
use App\Posts;
use App\Jobseeker;
use Validator;
use Illuminate\Support\Facades\Input ;
use File;
use App\UserProfile;
use App\City;
use App\Friend;
use App\Country;
use App\Interest;


class UserController extends Controller
{

    public function __construct() {

          
    }
    
public function emailcheck(Request $request){



               $user=User::where("email",$request->email)->count();


                   if($user>0){

                return response()->json('this email is already taken'); 
                }else{


                return response()->json('true'); 

                }
 }


public function GetSignup(){

    $city=City::all();
    $country=Country::all();
    $interest=Interest::all();


    return view('signup')->with('city',$city)->with('interest',$interest)->with('country',$country) ;
}

public function PostSign(Request $request){

                if (isset($request->interests)) {
                        $interests =  implode(",",$request->interests);
                        $request->merge(['interests' => $interests]);

                        }else {$request->merge(['interests' => 0]);}
                /////////////////////////////////////////////////////////////////////////////////

                        if ($request->hasFile('image')) {
                            $validator = Validator::make($request->all(), ['image' => 'mimes:jpeg,png,jpg,svg|max:10000', ]);
                            if ($validator->fails()) {

                        return redirect()->route('signup' , ['message'=> 'invalid image format only jpeg,png,jpg are allowed']);

                            }
                        }

                        if (empty($request->image)) {
                            $request->offsetUnset('image');}
                //////////////////////////////////////////////////////////////////////////////////
                        $all = $request->all();

                        if ($request->hasFile('image')) {

                            $image = Input::file('image');

                            $destinationPath = public_path().'/uploads/';
                            $filename        = str_random(6).'_'.$image->getClientOriginalName();

                            Input::file('image')->move($destinationPath, $filename);

                            $all['image'] = "uploads/".$filename;
                        }

                        $e2  = new User();
                        $all['status']=1;
                        $password=$all['password'];
                        $all['password']=bcrypt($all['password']);
                        $e2->fill($all);
                        $e2->save();

                        Auth::attempt(['email' => $all['email'], 'password' => $password]);

                        return redirect()->route('home');



                }

public function ProfileInfo(){


    $prof=User::find(Auth::user()->id);
    $prof['interests']=explode(',',$prof['interests']);


    $prof['interests']=Interest::whereIn('id',$prof['interests'])->pluck('name');

$l=Country::find($prof['country']);
if (isset($l->id)) {
    $prof['country']=$l['name'];
}
$l=City::find($prof['city']);
if (isset($l->id)) {
    $prof['city']=$l['name'];
}
$groupPosts =Posts::with('user','comments','comments.user')->where("type",0)->where("user_id",Auth::user()->id)->get();
    return view('myprofile')->with(['groupPosts'=>$groupPosts,'profile'=>$prof]);
}
public function profile($id){


    $prof=User::find($id);

    $prof['interests']=explode(',',$prof['interests']);


    $prof['interests']=Interest::whereIn('id',$prof['interests'])->pluck('name');

$l=Country::find($prof['country']);
if (isset($l->id)) {
    $prof['country']=$l['name'];
}
$l=City::find($prof['city']);
if (isset($l->id)) {
    $prof['city']=$l['name'];
}

 $u_id=Auth::user()->id;
        $find=Friend::where(function($find) use ($id,$u_id)
{
    $find->where('user2_id',  $u_id);
    $find->where('user1_id', $id);
})->orWhere(function($find)  use ($id,$u_id)
{
    $find->where('user1_id',  $u_id);
    $find->where('user2_id', $id);
})->where('status',1)->get()->count();
$groupPosts =Posts::with('user','comments','comments.user')->where("type",0)->where("user_id",$id)->get();
    return view('generalProfile')->with(['groupPosts'=>$groupPosts,'profile'=>$prof,"id" =>$id,'find'=>$find]);
}


public function editprofile(Request $request, $id)
    {

   $validator = Validator::make($request->all(), [
    'email' => 'required|max:255|email|unique:users,email,'.$id,

]);
    if ($validator->fails()) {

return 2;

    }
        $e = User::where('id',Auth::user()->id)->get()->first();;

        if (empty($request['password'])) {

        $e->fill($request->all());
        $e->offsetUnset('password');
                        return redirect()->back();

        }else{

        $request['password'] = bcrypt($request['password']);
        $e->fill($request->all());

        }



        $e->save();
                        return redirect()->back();
    }




public function editprofile2(Request $request)
    {
                if (isset($request->interests)) {
                        $interests =  implode(",",$request->interests);
                        $request->merge(['interests' => $interests]);

                        }else {$request->merge(['interests' => 0]);}
                /////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////////////////////

                        if ($request->hasFile('image')) {
                            $validator = Validator::make($request->all(), ['image' => 'mimes:jpeg,png,jpg,svg|max:10000', ]);
                            if ($validator->fails()) {

                        return redirect()->route('signup' , ['message'=> 'invalid image format only jpeg,png,jpg are allowed']);

                            }
                        }

                        if (empty($request->image)) {
                            $request->offsetUnset('image');}
                //////////////////////////////////////////////////////////////////////////////////
                        $all = $request->all();

                        if ($request->hasFile('image')) {

                            $image = Input::file('image');

                            $destinationPath = public_path().'/uploads/';
                            $filename        = str_random(6).'_'.$image->getClientOriginalName();

                            Input::file('image')->move($destinationPath, $filename);

                            $all['image'] = "uploads/".$filename;
                        }

        $e = User::where('id',Auth::user()->id)->get()->first();;
        if (empty($request['password'])) {

        $e->fill($all);
        $e->offsetUnset('password');

        }else{

        $request['password'] = bcrypt($request['password']);
        $e->fill($all);

        }



        $e->save();
        return redirect()->back();
    }


public function showeditprofile()
    {

    $city=City::all();
    $country=Country::all();
    $interest=Interest::all();

    return view('editProfile')->with('city',$city)->with('interest',$interest)->with('country',$country) ;

}





}
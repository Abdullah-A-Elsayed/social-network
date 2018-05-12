<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Company;
use App\Jobseeker;
use Validator;
use Illuminate\Support\Facades\Input ;
use File;
use App\UserProfile;


class UserController extends Controller
{

    public function __construct() {

          
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function emailcheck(Request $request){
if(isset($request->user)){
               $user=User::where("email",$request->email)->where("id","!=",$request->user)->count();


           }else if(isset($request->company)){

            $Company=Company::find($request->company);

               $user=User::where("email",$request->email)->where("id","!=",$Company['user_id'])->count();


           }else if(isset($request->jobseeker)){
            $Jobseeker=Jobseeker::find($request->jobseeker);
               $user=User::where("email",$request->email)->where("id","!=",$Jobseeker['user_id'])->count();


           }else{


               $user=User::where("email",$request->email)->count();


           }
if($user>0){

    return response()->json('this email is already taken'); 
}else{


        return response()->json('true'); 

    }
 }
    public function index()
    {
        $users = User::where('type',1)->get();
    
            

        return response()->json($users);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users',
        ]);
    if ($validator->fails()) {

return 2;

    }
         $e = new User();
         $request['status']=1;
         $request['type']=1;

         
         $request['password'] = bcrypt($request['password']);

         $e->fill($request->all());
         $e->save();
         return response()->json($e);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
$user = User::allInfo();

// $user['country'] = $user->profile->country['name'];
// $user['city'] = $user->profile->city['name'];
// $user['uni'] = $user->profile->uni['name'];
// $user['fac'] = $user->profile->fac['name'];
//dd($user);
return  $user;

    }
 public function update(Request $request, $id)
    {

   $validator = Validator::make($request->all(), [
    'username' => 'required|max:255',
    'password' => 'max:255',
    'email' => 'required|max:255|email|unique:users,email,'.$id,

]);
    if ($validator->fails()) {

return 2;

    }
        $e = User::where('type',1)->where('id',$id)->get()->first();;

        if (empty($request['password'])) {

        $e->fill($request->all());
        $e->offsetUnset('password');

        }else{

        $request['password'] = bcrypt($request['password']);
        $e->fill($request->all());

        }



        $e->save();
        return response()->json($e);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $e = User::where('type',1)->where('id',$id)->get()->first();;
       if($e->status==1){
            $suspend['status']=0;
        } else         $suspend['status']=1;

        $e->fill($suspend);
            $e->save(); 
               return response()->json($e);

    }
    public function manageuserdelete($id)
    {


        $e = User::where('type',1)->where('id',$id)->get()->first();;
             $e->delete();

      

    }



}

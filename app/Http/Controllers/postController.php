<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use App\Comment;
use App\Like;
use App\Group;
use App\GroupUser;
use App\GroupPost;
use Redirect;
use Validator;
use Illuminate\Support\Facades\Input ;
use File;
use App\Friend;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Collection;
class postController extends Controller
{


    
    public function PostAdd(Request $request)
    {


        $all = $request->all();

        $e2  = new Posts();
        $all['user_id']=Auth::user()->id;
        $e2->fill($all);
        $e2->save();
        return Redirect::back();

    }
    public function addComment(Request $request,$id)

{
       $all = $request->all();

        $e2  = new Comment();
        $all['user_id']=Auth::user()->id;
        $all['post_id']=$id;

        $e2->fill($all);
        $e2->save();
        return Redirect::back();

}
    public function like(Request $request,$id)

{
        $likes=Like::where('user_id',Auth::user()->id)->where('post_id',$id)->get();
$liked=$likes->count();
    if(!$liked)
    {
       


       $all = $request->all();

        $e2  = new Like();
        $all['user_id']=Auth::user()->id;
        $all['post_id']=$id;

        $e2->fill($all);
        $e2->save();
        return Redirect::back();
   }else{


        $likes->first()->delete();
        return Redirect::back();

        }

}

    public function all_posts(Request $request)
    {
        $all_posts =User::find(Auth::user()->id)->friendsPosts();


        $group =GroupUser::where("user_id",Auth::user()->id)->pluck('group_id');


        $groupPosts =Posts::whereIn("type",$group)->with('user','group','comments','comments.user')->get();



	return View('home',['all_posts'=> $all_posts ,'groupPosts'=>$groupPosts]);

    }





    public function all_friends(Request $request)
    {
    	$all_friends = Posts::all();
    	return View('friends',['all_friends'=> $all_friends]);

    }






public function group(){

 $all_groups = Auth::user()->groups;
 $userGroup = Auth::user()->usergroup;

 $SuggestedGroups=GroupUser::where('user_id',Auth::user()->id)->pluck('group_id');
 $SuggestedGroups=Group::whereNotIn('id',$SuggestedGroups)->get();
return view('groups')->with('all_groups',$all_groups)->with('userGroup',$userGroup)->with('SuggestedGroups',$SuggestedGroups);

}

public function leavegroup($id){

 $group=GroupUser::where('user_id',Auth::user()->id)->where('group_id',$id)->first();
 $group->delete();
return Redirect::back();


}

public function joinGroup($id){
 $group=new GroupUser();
 $group->user_id=Auth::user()->id;
 $group->group_id=$id;
 $group->status=1;
 $group->save();

return Redirect::back();

}

public function deleteGroup($id){
$group=GroupUser::where('group_id',$id)->get();
foreach ($group as $value) {

    $value->delete();
}


return Redirect::back();

}



public function AddGroup(Request $request){

                        if ($request->hasFile('image')) {
                            $validator = Validator::make($request->all(), ['image' => 'mimes:jpeg,png,jpg,svg|max:10000', ]);
                            if ($validator->fails()) {

                            return Redirect::back();

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

                        $e2  = new Group();
                        $e2->user_id=Auth::user()->id;

                        $e2->fill($all);
                        $e2->save();
                        $e1  = new GroupUser();

                        $e1->group_id=$e2->id;
                        $e1->user_id=Auth::user()->id;
                        $e1->status=1;

                        $e1->save();

                        return Redirect::back();





}

/* ------------------- new code ------------------- */

    public function viewGroup($id)
    {
        $group = Group::where('id',$id)->first();
        //return $group;
        return view("grouptemp",['prof'=>$group]);
    }
}

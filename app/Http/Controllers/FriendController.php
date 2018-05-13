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

use App\Friend;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Collection;
class FriendController extends Controller
{


    
    public function friends()
    {

        $friends=Auth::user()->friends();

if ($friends->count()) {
        $friends=User::mutual($friends);   
}
        $friendRequests=Auth::user()->friendRequests();

if ($friendRequests->count()) {
        $friendRequests=User::mutual($friendRequests);   
}

        $SuggestedFriends=Auth::user()->notsuggestedfriends()->pluck('id');
        $SuggestedFriends=User::whereNotIn('id',$SuggestedFriends)->where('id','!=',Auth::user()->id)->get();
if ($SuggestedFriends->count()) {
        $SuggestedFriends=User::mutual($SuggestedFriends);   
}
     
    return View('friends',['friends'=> $friends,'friendRequests'=> $friendRequests,'SuggestedFriends'=> $SuggestedFriends]);

    }

     public function unfriend($id)
    { 
        $u_id=Auth::user()->id;
        $find=Friend::where(function($find) use ($id,$u_id)
{
    $find->where('user2_id',  $u_id);
    $find->where('user1_id', $id);
})->orWhere(function($find)  use ($id,$u_id)
{
    $find->where('user1_id',  $u_id);
    $find->where('user2_id', $id);
})->first();

        $find->delete();
                return Redirect::back();

    }
   
     public function acceptFriend($id)
    { 
        $u_id=Auth::user()->id;
        $find=Friend::where(function($find) use ($id,$u_id)
{
    $find->where('user2_id',  $u_id);
    $find->where('user1_id', $id);
})->orWhere(function($find)  use ($id,$u_id)
{
    $find->where('user1_id',  $u_id);
    $find->where('user2_id', $id);
})->first();

        $find->status=1;
        $find->save();
                return Redirect::back();

    }
   
     public function rejectFriend($id)
    { 
        $u_id=Auth::user()->id;
        $find=Friend::where(function($find) use ($id,$u_id)
{
    $find->where('user2_id',  $u_id);
    $find->where('user1_id', $id);
})->orWhere(function($find)  use ($id,$u_id)
{
    $find->where('user1_id',  $u_id);
    $find->where('user2_id', $id);
})->first();

        $find->delete();
                return Redirect::back();

    }
   
     public function addFriend($id)
    { 
        $u_id=Auth::user()->id;

        $find=new Friend();

        $find->user2_id=$id;
        $find->user1_id=$u_id;
        $find->status=0;
        $find->save();
        return Redirect::back();

          }
 public function search(Request $request)
    { 
$user=User::query();

if (isset($request->text)) {
    $user=$user->where('name' ,'like','%'.$request->text.'%');
}
$user=$user->paginate(4)->withPath('?text='.$request->text);;


if ($user->count()) {
        $user=User::mutual($user);   
}

    return View('searchresults',['user'=> $user,]);
   }
}

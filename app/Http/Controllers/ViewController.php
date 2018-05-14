<?php

namespace App\Http\Controllers;

use     Carbon;
use App\Posts;
use App\User;
use App\Like;
use App\Comment;
use App\Country;
use App\Group;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use stdClass;
use Illuminate\Support\Facades\DB;
use function view;

class ViewController extends Controller {

    public function __construct() {
        $this->middleware('auth');

    }

    function randomLinkGenerator() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 32; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function view(Request $request) {

        $message = new stdClass();
        $message->visible = false;

        if ($request->session()->has("message")) {
            $m = $request->session()->get('message');
            if ($m == "create_ok") {
                $message->text = 'Campaign Created Successfully';
                $message->type = 'alert-success';
                $message->visible = true;
            } else if ($m == "delete_ok") {
                $message->text = 'Campaign Deleted Successfully';
                $message->type = 'alert-success';
                $message->visible = true;
            } else if ($m == "edited_ok") {
                $message->text = 'Campaign Saved Successfully';
                $message->type = 'alert-success';
                $message->visible = true;
            }
        }


        $u = Auth::user();

        $view = $request->view;
        if ($view == null || $view == '') {
       
                $view = 'dashboard';
           
        }
        $array=array();
        

        $users=User::get()->count();
        

        $users2day=User::whereRaw('Date(created_at) = CURDATE()')->get()->count();;

        $usersmonthly=User::where('created_at','<',date( "Y-m-d", strtotime( " +1   day" ) ))->where('created_at','>=',date( "Y-m-d", strtotime( " -1 month" ) ))->get()->count();;





        $posts=Posts::get()->count();;
        

        $posts2day=Posts::whereRaw('Date(created_at) = CURDATE()')->get()->count();
        $postsmonthly=Posts::where('created_at','<',date( "Y-m-d", strtotime( " +1   day" ) ))->where('created_at','>=',date( "Y-m-d", strtotime( " -1 month" ) ))->get()->count();





        $groupposts=Posts::where('type','!=',0)->get()->count();;
        

        $groupposts2day=Posts::where('type','!=',0)->whereRaw('Date(created_at) = CURDATE()')->get()->count();
        $grouppostsmonthly=Posts::where('type','!=',0)->where('created_at','<',date( "Y-m-d", strtotime( " +1   day" ) ))->where('created_at','>=',date( "Y-m-d", strtotime( " -1 month" ) ))->get()->count();




        $usersposts=Posts::where('type',0)->get()->count();;
        

        $usersposts2day=Posts::where('type',0)->whereRaw('Date(created_at) = CURDATE()')->get()->count();
        $userspostsmonthly=Posts::where('type',0)->where('created_at','<',date( "Y-m-d", strtotime( " +1   day" ) ))->where('created_at','>=',date( "Y-m-d", strtotime( " -1 month" ) ))->get()->count();

$countUser=User::get()->count();
$latestPosts=Posts::where('type','0')->limit(5)->orderBy('id','desc')->get();
$latestgPosts=Posts::where('type','!=','0')->limit(5)->orderBy('id','desc')->get();


$likes=Like::get()->count();


$comments=Comment::get()->count();
$recentUsers=User::limit(3)->orderBy('id','desc')->get();

        return view($view)
                        ->with("page", $view)
                        ->with("message", $message)
                        ->with("countUser", $countUser)
                        ->with("users",$users)
                        ->with("users2day",$users2day)
                        ->with("usersmonthly",$usersmonthly)
                        ->with("posts",$posts)
                        ->with("posts2day",$posts2day)
                        ->with("postsmonthly",$postsmonthly)
                        ->with("groupposts",$groupposts)
                        ->with("groupposts2day",$groupposts2day)
                        ->with("grouppostsmonthly",$grouppostsmonthly)
                        ->with("usersposts",$usersposts)
                        ->with("usersposts2day",$usersposts2day)
                        ->with("userspostsmonthly",$userspostsmonthly)
                        ->with("latestPosts",$latestPosts)
                        ->with("latestgPosts",$latestgPosts)
                        ->with("likes",$likes)
                        ->with("comments",$comments)
                        ->with("recentUsers",$recentUsers)
                        ->with("user", $u);
    }


    public function users(){


$users=User::where('type',0)->get();

foreach ($users as &$value) {
$likes=Like::where('user_id', $value['id'])->count();
			$value['likes']=$likes;


$posts=Posts::where('user_id', $value['id'])->count();
			$value['posts']=$posts;


$userposts=Posts::where('user_id', $value['id'])->where('type', 0)->count();
			$value['userposts']=$userposts;

$guserposts=Posts::where('user_id', $value['id'])->where('type','!=', 0)->count();
			$value['guserposts']=$guserposts;

$comments=Comment::where('user_id', $value['id'])->count();
			$value['comments']=$comments;


$city=City::where('id', $value['city'])->first();
			$value['city']=$city['name'];
$country=Country::where('id', $value['country'])->first();
			$value['country']=$country['name'];
$value['friends']=User::find($value['id'])->friends()->count();

}

return $users;

    }


public function  posts($id){

$posts=Posts::where('user_id',$id)->get();

foreach ($posts as &$value) {
	if ($value['type']) {

		$g=Group::find($value['type']);
		$value['type']="Group->".$g['name'];

	}else{

		$value['type']='profile post';
	}

$likes=Like::where('post_id', $value['id'])->count();
			$value['likes']=$likes;


$comments=Comment::where('post_id', $value['id'])->count();
			$value['comments']=$comments;

}
return $posts;

}
public function  comments2($id){


$comments=Comment::where('post_id', $id)->get();


foreach ($comments as &$value) {
			$value['username']=$value->user->name;
}

return $comments;

		}

public function  friends2($id){


$Friend=User::find($id)->friends();
return $Friend;

	}

}
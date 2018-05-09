<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function all_posts(Request $request)
    {
    	$all_posts = Posts::all();
    	return View('home',['all_posts'=> $all_posts]);

    }

    public function all_groups(Request $request)
    {
    	$all_groups = Posts::all();
    	return View('groups',['all_groups'=> $all_groups]);

    }

    public function all_friends(Request $request)
    {
    	$all_friends = Posts::all();
    	return View('friends',['all_friends'=> $all_friends]);

    }
}

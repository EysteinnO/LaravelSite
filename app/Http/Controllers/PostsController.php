<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function indexhome()
    {
    	return view('posts.indexhome');
    }

    public function showposts()
    {
    	return view('posts.showposts');
    }
}

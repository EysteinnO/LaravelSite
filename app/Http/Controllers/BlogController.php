<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloghome()
    {
        //fetch from the Task table and put into $posts
    	$posts = Task::all();

    	return view('blog.bloghome', compact('posts'));
    }

    public function create()
    {
    	return view('blog.create');
    }
    //Create new post and save it do the database and 	redirect
    public function store()
    {    

    	Task::create(request(['title', 'body']));

    	return redirect('blogtemp');
    }
}

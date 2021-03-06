<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	//Index view
    public function bloghome()
    {
        //fetch from the Task table and put into $posts
    	$posts = Task::latest()->get();
    	return view('blog.bloghome', compact('posts'));
    }
    //Form view
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
    //Show specific posts bound to database id 
    public function showposts($id)
    {

    	$posts = Task::find($id);
    	return view('blog.showposts', compact('posts'));
    }
}

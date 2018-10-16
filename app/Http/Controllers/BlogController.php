<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloghome()
    {
    	return view('blog.bloghome');
    }

    public function create()
    {
    	return view('blog.create');
    }
    //Create new post and save it do the database and redirect
    public function store()
    {    	

    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	Task::create(request(['title', 'body']));

    	return redirect('blogtemp');
    }
}

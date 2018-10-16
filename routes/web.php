<?php


use App\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PostsController@indexhome');
//Route::get('/posts/{post}', 'PostsController@showposts');

Route::get('/blogtemp', 'BlogController@bloghome');
Route::get('/blogtemp/create', 'BlogController@create');
Route::post('/blogtemp', 'BlogController@store');


//Controller
//Eloquent model -> Post (eintala)
//Migration create_posts_table (fleirtala)

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::post('');



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

/*
	1. Route
	2. Controller: plural, e.g. PostsController
	3. Model: singular, e.g. Post
	4. Migration: e.g. create_posts_table

*/

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/tasks', 'TasksController@index');

// // Route::get('/tasks/', function () {

// // 	// $tasks = DB::table('tasks')->get();
// // 	$tasks = Task::all();
// //     return view('tasks.index', compact('tasks'));
// // });

// Route::get('/tasks/{task}', 'TasksController@show');

// // Route::get('/tasks/{id}', function ($id) {
// // 	// $task = DB::table('tasks')->find($id);
// // 	$task = Task::find($id);
// // 	return view('tasks.show', compact('task'));
// // });

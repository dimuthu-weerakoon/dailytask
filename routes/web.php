<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
$data= App\Task::all();

return view('tasks.tasks')->with('tasks',$data);

});

//Task Controller 
Route::post('/savetask', 'TasksController@store');

Route::get('/deltask/{id}', 'TasksController@delete');

Route::any('/updatetask/{id}', 'TasksController@uptask');


Route::get('/markascompleted/{id}','TasksController@mark');

Route::get('/markasnotcompleted/{id}','TasksController@marknot'); 
Route::post('/uptask', 'TasksController@edited');
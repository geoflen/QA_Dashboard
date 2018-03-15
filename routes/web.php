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


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('trainer/index', array(
	"as" => "trainer.index",
	"uses" => "TrainerController@index"));
Route::get('/trainer/create', array(
	"as" => "trainer.create",
	"uses" => "TrainerController@create"));
Route::post('trainer/store', array(
	"as" => "trainer.store",
	"uses" => "TrainerController@store"));
Route::post('/trainer/{id}/update', array(
	"as" => "trainer.update",
	"uses" => "TrainerController@update"));
Route::get('trainer/{id}/show', array(
	"as" => "trainer.show",
	"uses" => "TrainerController@show"));
Route::get('trainer/{id}/edit', array(
	"as" => "trainer.edit",
	"uses" => "TrainerController@edit"));
Route::get('trainer/destroy', array(
	"as" => "trainer.destroy",
	"uses" => "TrainerController@destroy"));

Route::get('training/index', array(
	"as" => "training.index",
	"uses" => "TrainingController@index"));

Route::get('training/trainingData', array(
	"as" => "training.trainingData",
	"uses" => "TrainingController@trainingData"));
Route::get('training/create', array(
	"as" => "training.create",
	"uses" => "TrainingController@create"));
Route::post('training/store', array(
	"as" => "training.store",
	"uses" => "TrainingController@store"));
Route::post('/training/{id}/update', array(
	"as" => "training.update",
	"uses" => "TrainingController@update"));
Route::get('training/{id}/show', array(
	"as" => "training.show",
	"uses" => "TrainingController@show"));
Route::get('training/{id}/edit', array(
	"as" => "training.edit",
	"uses" => "TrainingController@edit"));
Route::get('training/destroy', array(
	"as" => "training.destroy",
	"uses" => "TrainingController@destroy"));
// Route::resource('training', 'TrainingController');


Route::get('lqms/index', array(
	"as" => "lqms.index",
	"uses" => "LQMSTraineeController@index"));
Route::get('lqms/create', array(
	"as" => "lqms.create",
	"uses" => "LQMSTraineeController@create"));
Route::post('lqms/store', array(
	"as" => "lqms.store",
	"uses" => "LQMSTraineeController@store"));
Route::get('lqms/{id}/show', array(
	"as" => "lqms.show",
	"uses" => "LQMSTraineeController@show"));
Route::get('lqms/{id}/edit', array(
	"as" => "lqms.edit",
	"uses" => "LQMSTraineeController@edit"));
Route::get('lqms/destroy', array(
	"as" => "lqms.destroy",
	"uses" => "LQMSTraineeController@destroy"));

Route::get('/auditor/index', array(
	"as"=>"auditor.index",
	"uses"=> "AuditorController@index"));
Route::get('/auditor/create', array(
	"as"=>"auditor.create",
	"uses"=> "AuditorController@create"));
Route::post('/auditor/store', array(
	"as" => "auditor.store",
	"uses" => "AuditorController@store"));
Route::post('/auditor/{id}/update', array(
	"as" => "auditor.update",
	"uses" => "AuditorController@update"));
Route::get('/auditor/{id}/show', array(
	"as" => "auditor.show",
	"uses" => "AuditorController@show"
	));
Route::get('/auditor/{id}/edit', array(
	"as" => "auditor.edit",
	"uses" => "AuditorController@edit"
	));

Route::delete('/auditor/{id}/destroy', array(
	"as" => "auditor.destroy",
	"uses" => "AuditorController@destroy"
	));

Route::resource('tasks', 'TasksController');

// Route::get('tasks/create', array(
// 	"as" => "tasks.create", 
// 	"uses" => "TasksController@create"
// 	));

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});




 

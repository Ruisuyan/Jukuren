<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/minor', 'HomeController@minor')->name("minor");

// Route::get('/register', ['as' => 'register.create', 'uses' => 'RegistrationController@create']); 
// Route::post('/register', ['as' => 'register.store', 'uses' => 'RegistrationController@store']); 

// Route::get('/login', ['as' => 'session.create', 'uses' => 'SessionController@create']);
// Route::post('/login', ['as' => 'session.store', 'uses' => 'SessionController@store']);
// Route::get('/logout', ['as' => 'session.destroy', 'uses' => 'SessionController@destroy']);

Route::resource('competencia', 'CompetenceController');
Route::resource('curso', 'CourseController');
Route::resource('alumno', 'StudentController');
Route::resource('desempenho', 'PerformanceController');
Route::resource('docente', 'TeacherController');
Route::resource('evaluacion', 'EvaluationController');
Route::resource('pregunta', 'QuestionController');
Route::resource('reporte', 'ReportController');
Route::resource('usuario', 'UserController');
Route::resource('portafolio', 'PortfolioController');
Route::resource('evidencia', 'EvidenceController');
//->middleware('coord','admin')
Route::get('/desempenho/assignToCourse/{id}',['as' => 'desempenho.assignToCourseGet', 'uses' => 'PerformanceController@assignToCourseGet']);
Route::put('/desempenho/assignToCourse/{id}',['as' => 'desempenho.assignToCoursePost', 'uses' => 'PerformanceController@assignToCoursePost']);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', 'HomeController@index')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");

Route::resource('competencia', 'CompetenceController');
Route::resource('curso', 'CourseController');
Route::resource('alumno', 'StudentController');
Route::resource('desempenho', 'PerformanceController');
Route::resource('docente', 'TeacherController');
Route::resource('evaluacion', 'EvaluationController');
Route::resource('pregunta', 'QuestionController');
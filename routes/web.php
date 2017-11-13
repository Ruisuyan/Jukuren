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
Route::resource('desempenho', 'PerformanceController');
Route::resource('docente', 'TeacherController');
Route::resource('evaluacionenlinea', 'OnlineEvaluationController');
Route::resource('pregunta', 'QuestionController');
Route::resource('reporte', 'ReportController');
Route::resource('usuario', 'UserController');
Route::resource('portafolio', 'PortfolioController');
Route::resource('evidencia', 'EvidenceController');
Route::resource('ciclo', 'CycleController');
Route::resource('horario', 'ScheduleController');
//->middleware('coord','admin')

//Evaluacion
Route::get('/evaluacion/elegirHorario',['as' => 'evaluacion.chooseScheduleGet', 'uses' => 'EvaluationController@chooseScheduleGet'])->middleware('teacher');
Route::post('/evaluacion/elegirHorario',['as' => 'evaluacion.chooseSchedulePost', 'uses' => 'EvaluationController@chooseSchedulePost'])->middleware('teacher');
Route::get('/evaluacion/create/{id}',['as' => 'evaluacion.create', 'uses' => 'EvaluationController@create'])->middleware('teacher');
Route::post('/evaluacion',['as' => 'evaluacion.store', 'uses' => 'EvaluationController@store'])->middleware('teacher');
Route::resource('evaluacion', 'EvaluationController', ['except' => [ 'create', 'store' ]])->middleware('teacher');
//Desempeño
Route::get('/desempenho/asignarCursos/{id}',['as' => 'desempenho.assignToCourseGet', 'uses' => 'PerformanceController@assignToCourseGet']);
Route::put('/desempenho/asignarCursos/{id}',['as' => 'desempenho.assignToCoursePost', 'uses' => 'PerformanceController@assignToCoursePost']);
//Horario
Route::get('/horario/asignarDocente/{id}',['as' => 'horario.assignToTeacherGet', 'uses' => 'ScheduleController@assignToTeacherGet']);
Route::put('/horario/asignarDocente/{id}',['as' => 'horario.assignToTeacherPost', 'uses' => 'ScheduleController@assignToTeacherPost']);
Route::get('/horario/asignarAlumnos/{id}',['as' => 'horario.assignToStudentsGet', 'uses' => 'ScheduleController@assignToStudentsGet']);
Route::put('/horario/asignarAlumnos/{id}',['as' => 'horario.assignToStudentsPost', 'uses' => 'ScheduleController@assignToStudentsPost']);
//Alumno
Route::get('/alumno/misEvaluaciones',['as' => 'alumno.myEvaluations', 'uses' => 'StudentController@myEvaluations'])->middleware('student');
Route::resource('alumno', 'StudentController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

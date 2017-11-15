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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::resource('competencia', 'CompetenceController')->middleware('coord');
Route::resource('curso', 'CourseController')->middleware('coord');
Route::resource('desempenho', 'PerformanceController')->middleware('coord');
Route::resource('docente', 'TeacherController')->middleware('coord');
Route::resource('evaluacionenlinea', 'OnlineEvaluationController')->middleware('auth');
Route::resource('pregunta', 'QuestionController')->middleware('auth');
Route::resource('usuario', 'UserController')->middleware('admin');
Route::resource('ciclo', 'CycleController')->middleware('coord');
Route::resource('horario', 'ScheduleController')->middleware('coord');

//Evaluacion
Route::get('/evaluacion/elegirHorario',['as' => 'evaluacion.chooseScheduleGet', 'uses' => 'EvaluationController@chooseScheduleGet'])->middleware('teacher');
Route::post('/evaluacion/elegirHorario',['as' => 'evaluacion.chooseSchedulePost', 'uses' => 'EvaluationController@chooseSchedulePost'])->middleware('teacher');
Route::get('/evaluacion/create/{id}',['as' => 'evaluacion.create', 'uses' => 'EvaluationController@create'])->middleware('teacher');
Route::post('/evaluacion',['as' => 'evaluacion.store', 'uses' => 'EvaluationController@store'])->middleware('teacher');
Route::resource('evaluacion', 'EvaluationController', ['except' => [ 'create', 'store' ]])->middleware('teacher');
//Desempeño
Route::get('/desempenho/asignarCursos/{id}',['as' => 'desempenho.assignToCourseGet', 'uses' => 'PerformanceController@assignToCourseGet'])->middleware('coord');
Route::put('/desempenho/asignarCursos/{id}',['as' => 'desempenho.assignToCoursePost', 'uses' => 'PerformanceController@assignToCoursePost'])->middleware('coord');
//Horario
Route::get('/horario/asignarDocente/{id}',['as' => 'horario.assignToTeacherGet', 'uses' => 'ScheduleController@assignToTeacherGet'])->middleware('coord');
Route::put('/horario/asignarDocente/{id}',['as' => 'horario.assignToTeacherPost', 'uses' => 'ScheduleController@assignToTeacherPost'])->middleware('coord');
Route::get('/horario/asignarAlumnos/{id}',['as' => 'horario.assignToStudentsGet', 'uses' => 'ScheduleController@assignToStudentsGet'])->middleware('coord');
Route::put('/horario/asignarAlumnos/{id}',['as' => 'horario.assignToStudentsPost', 'uses' => 'ScheduleController@assignToStudentsPost'])->middleware('coord');
//Alumno
Route::get('/alumno/misEvaluaciones',['as' => 'alumno.myEvaluations', 'uses' => 'StudentController@myEvaluations'])->middleware('student');
Route::resource('alumno', 'StudentController')->middleware('teacher');
//Evidencia
Route::get('/evidencia/subirEvidencia/{id}',['as' => 'evidencia.uploadEvidenceGet', 'uses' => 'EvidenceController@uploadEvidenceGet'])->middleware('student');
Route::put('/evidencia/subirEvidencia/{id}',['as' => 'evidencia.uploadEvidencePost', 'uses' => 'EvidenceController@uploadEvidencePost'])->middleware('student');
Route::get('/evidencia/corregirEvidencia/{id}',['as' => 'evidencia.checkEvidenceGet', 'uses' => 'EvidenceController@checkEvidenceGet'])->middleware('teacher');
Route::put('/evidencia/corregirEvidencia/{id}',['as' => 'evidencia.checkEvidencePost', 'uses' => 'EvidenceController@checkEvidencePost'])->middleware('teacher');
Route::get('/evidencia/listaEvidencias/{id}',['as' => 'evidencia.evidencesIndex', 'uses' => 'EvidenceController@evidencesIndex'])->middleware('teacher');
Route::resource('evidencia', 'EvidenceController')->middleware('auth');
//Reporte
Route::get('/reporte/elegirHorario',['as' => 'reporte.scheduleSelectGet', 'uses' => 'ReportController@scheduleSelectGet'])->middleware('teacher');
Route::post('/reporte/elegirHorario',['as' => 'reporte.scheduleSelectPost', 'uses' => 'ReportController@scheduleSelectPost'])->middleware('teacher');
Route::get('/reporte/reporteHorario/{id}',['as' => 'reporte.scheduleReport', 'uses' => 'ReportController@scheduleReport'])->middleware('teacher');
Route::resource('reporte', 'ReportController')->middleware('teacher');
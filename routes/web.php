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
Route::resource('pregunta', 'QuestionController')->middleware('teacher'); 
Route::resource('usuario', 'UserController')->middleware('admin');
Route::resource('ciclo', 'CycleController')->middleware('coord');
Route::resource('horario', 'ScheduleController')->middleware('coord');
Route::resource('cuestionario', 'PollController')->middleware('teacher');
Route::resource('directa', 'DirectevaluationController')->middleware('teacher');
//Cuestionario
Route::get('/cuestionario/create/{id}',['as' => 'cuestionario.create', 'uses' => 'PollController@create'])->middleware('teacher');
Route::post('/cuestionario',['as' => 'cuestionario.store', 'uses' => 'PollController@store'])->middleware('teacher');
Route::resource('cuestionario', 'PollController', ['except' => [ 'create', 'store' ]])->middleware('teacher');
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
Route::resource('alumno', 'StudentController')->middleware('coord');
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
Route::get('/reporte/elegirParametros',['as' => 'reporte.studentParametersGet', 'uses' => 'ReportController@studentParametersGet'])->middleware('coord');
Route::post('/reporte/elegirParametros',['as' => 'reporte.studentParametersPost', 'uses' => 'ReportController@studentParametersPost'])->middleware('coord');
Route::get('/reporte/graficoAlumno/{id}{si}{sf}{co}',['as' => 'reporte.studentGraph', 'uses' => 'ReportController@studentGraph'])->middleware('coord');
Route::resource('reporte', 'ReportController')->middleware('teacher');
//EnLinea
Route::get('/evaluacionenlinea/infoCuestionario/{id}',['as' => 'evaluacionenlinea.infoPoll', 'uses' => 'OnlineEvaluationController@infoPoll'])->middleware('student');
Route::get('/evaluacionenlinea/resolverCuestionario/{id}',['as' => 'evaluacionenlinea.solvePollGet', 'uses' => 'OnlineEvaluationController@solvePollGet'])->middleware('student');
Route::put('/evaluacionenlinea/resolverCuestionario',['as' => 'evaluacionenlinea.solvePollPost', 'uses' => 'OnlineEvaluationController@solvePollPost'])->middleware('student');
Route::get('/evaluacionenlinea/corregirCuestionario/{id}',['as' => 'evaluacionenlinea.checkPollGet', 'uses' => 'OnlineEvaluationController@checkPollGet'])->middleware('teacher');
Route::put('/evaluacionenlinea/corregirCuestionario',['as' => 'evaluacionenlinea.checkPollPost', 'uses' => 'OnlineEvaluationController@checkPollPost'])->middleware('teacher');
Route::get('/evaluacionenlinea/listaCuestionarios/{id}',['as' => 'evaluacionenlinea.pollsIndex', 'uses' => 'OnlineEvaluationController@pollsIndex'])->middleware('teacher');
Route::resource('evaluacionenlinea', 'OnlineEvaluationController')->middleware('student');
//Evaluacion directa
Route::get('/directa/elegirAlumno/{id}',['as' => 'directa.chooseStudent', 'uses' => 'DirectevaluationController@chooseStudent'])->middleware('teacher');
// Route::post('/directa/elegirAlumno/{id}',['as' => 'directa.chooseStudentPost', 'uses' => 'DirectevaluationController@chooseStudentPost'])->middleware('teacher');
Route::get('/directa/puntuarEvaluacion/{id}{ev}',['as' => 'directa.putScoreGet', 'uses' => 'DirectevaluationController@putScoreGet'])->middleware('teacher');
Route::post('/directa/puntuarEvaluacion',['as' => 'directa.putScorePost', 'uses' => 'DirectevaluationController@putScorePost'])->middleware('teacher');
Route::resource('directa', 'DirectevaluationController')->middleware('teacher');
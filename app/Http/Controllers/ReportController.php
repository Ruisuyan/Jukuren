<?php

namespace App\Http\Controllers;

use App\Report;
use App\Schedule;
use App\Student;
use App\Evaluation;
use App\Evidence;
use App\Teacher;
use App\Level;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }

    //Reporte por horario del profesor

    public function scheduleSelectGet()
    {
        $teacher = Teacher::where('user_id',auth()->user()->id)->first();
        
        $schedules = Schedule::where('teacher_id',$teacher->id)->get();
        //dd($schedules);
        $data = [
            'schedules' => $schedules,
        ];
        return view('reports.scheduleSelect',$data);
    }

    public function scheduleSelectPost(Request $request)
    {
        $scheduleId = $request['scheduleId'];
        return redirect()->route('reporte.scheduleReport',$scheduleId);
    }
    
    public function scheduleReport($id)
    {
        $competenceId = 1;
        $schedule = Schedule::find($id);        
        $scoreCollection = collect();
        //dd($scoreCollection);
        //Niveles de desempeño para comparacion
        $levels = Level::with(['evaluation.performance.competence' => function($query)use($competenceId){
            $query->where('id',$competenceId);
        }])->get();

        //Los puntajes maximos, medios y minimos de la competencia
        $highScore = $levels->sum('puntajeAlto');
        $midScore = $levels->sum('puntajeMedio');
        $lowScore = $levels->sum('puntajeBajo');

        //Por cada alumno
        foreach ($schedule->students as $student) {

            //Evidencias filtradas por alumnos y competencia
            $evidences = Evidence::where('student_id',$student->id)->with(['evaluation.performance.competence' => function($query)use($competenceId){
                $query->where('id',$competenceId);
            }])->get();                                   
            $evidencesAvg = $evidences->avg('puntaje');
            $scoreCollection->push($evidencesAvg);
        }
        
        $data = [
            'students' => $schedule->students,
            'scoreCollection' => $scoreCollection,
            'highScore' => $highScore,
            'midScore' => $midScore,
            'lowScore' => $lowScore
        ];        
        return view('reports.scheduleReport',$data);
    }


}

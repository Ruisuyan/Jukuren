<?php

namespace App\Http\Controllers;

use App\Report;
use App\Schedule;
use App\Student;
use App\Evaluation;
use App\Evidence;
use App\Teacher;
use App\Level;
use App\OnlineEvaluation;
use Illuminate\Http\Request;
use Charts;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $chart = Charts::multi('bar', 'material')
        // // Setup the chart settings
        // ->title("My Cool Chart")
        // // A dimension of 0 means it will take 100% of the space
        // ->dimensions(0, 400) // Width x Height
        // // This defines a preset of colors already done:)
        // ->template("material")
        // // You could always set them manually
        // // ->colors(['#2196F3', '#F44336', '#FFC107'])
        // // Setup the diferent datasets (this is a multi chart)
        // ->dataset('Element 1', [5,20,100])
        // ->dataset('Element 2', [15,30,80])
        // ->dataset('Element 3', [25,10,40])
        // // Setup what the values mean
        // ->labels(['One', 'Two', 'Three']);
        $chart = Charts::create('line', 'highcharts')
        ->title('Desempeño')
        ->elementLabel('Desempeño')
        ->labels(['2016-1', '2016-2', '2017-1'])
        ->values([5,10,20])
        ->dimensions(1000,500)
        ->responsive(false);
        $data =[
            'chart' => $chart,
        ];
        return view('reports.index',$data);
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
        // $highScore = $levels->sum('puntajeAlto');
        // $midScore = $levels->sum('puntajeMedio');
        // $lowScore = $levels->sum('puntajeBajo');

        //Por cada alumno
        foreach ($schedule->students as $student) {

            //Evidencias filtradas por alumnos y competencia
            $evidences = Evidence::where('student_id',$student->id)->with(['evaluation.performance.competence' => function($query)use($competenceId){
                $query->where('id',$competenceId);
            }])->get();
            $onlineEvaluations = OnlineEvaluation::where('student_id',$student->id)->with(['poll.evaluation.performance.competence' => function($query)use($competenceId){
                $query->where('id',$competenceId);
            }])->get();                                    
            $evidencesAvg = $evidences->avg('puntaje');
            $onlineAvg = $onlineEvaluations->avg('puntaje');            
            $scoreCollection->push($evidencesAvg);
        }
        
        $data = [
            'students' => $schedule->students,
            'scoreCollection' => $scoreCollection,
            // 'highScore' => $highScore,
            // 'midScore' => $midScore,
            // 'lowScore' => $lowScore
        ];        
        return view('reports.scheduleReport',$data);
    }


}

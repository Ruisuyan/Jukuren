<?php

namespace App\Http\Controllers;

use App\Report;
use App\Schedule;
use App\Student;
use App\Evaluation;
use App\Evidence;
use App\Teacher;
use App\Level;
use App\Cycle;
use App\OnlineEvaluation;
use App\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // $cycles = Cycle::select(['id','semestre'])->whereBetween('semestre',['2015-1','2017-1'])->get();        
        
        // $scoreCollection = collect();        
        // foreach ($cycles as $key => $cycle) {            
        //     $evidences = Evidence::select(['id','puntaje','evaluation_id'])->whereHas('evaluation.schedule', function($query)use($cycle){
        //         $query->where('cycle_id',$cycle->id);
        //     })->whereHas('evaluation.performance',function($query){
        //         $query->where('competence_id','1');
        //     })->where('student_id','3')->get();            
        //     $evidencesAvg = $evidences->avg('puntaje');        
        //     $scoreCollection->push($evidencesAvg);
        // }
        // $chart = Charts::create('line', 'highcharts')
        // ->title('Desempeño')
        // ->elementLabel('Desempeño')
        // ->labels($cycles->pluck('semestre'))
        // ->values($scoreCollection)
        // ->dimensions(1000,500)
        // ->responsive(false);
        // $data =[
        //     'chart' => $chart,
        // ];
        // return view('reports.index',$data);
    }

    public function studentParametersGet()
    {
        $students = Student::orderBy('codigo')->paginate(10);
        $cycles = Cycle::all();
        $data = [
            'students' => $students,
            'semestreIni' => $cycles->pluck('semestre','id'),
            'semestreFin' => $cycles->pluck('semestre','id'),
        ];
        return view('reports.studentParameters',$data);
    }

    public function studentParametersPost(Request $request)
    {
        $studentId  =  $request['studentId'];
        $semestreIni = $request['semestreIni'];
        $semestreFin = $request['semestreFin'];

        return redirect()->route('reporte.studentGraph',[$studentId,$semestreIni,$semestreFin]);
    }

    public function studentGraph($id,$si,$sf)
    {        
        $semestreIni = Cycle::find($si);                
        $semestreFin = Cycle::find($sf);        
        $cycles = Cycle::whereBetween('semestre',[$semestreIni->semestre,$semestreFin->semestre])->get();        
        $competencies = Competence::all();
        //dd($competencies[0]);
        $scoreCollection = collect();        
        foreach ($cycles as $key => $cycle) {            
            $evidences = Evidence::select(['id','puntaje','evaluation_id'])->whereHas('evaluation.schedule', function($query)use($cycle){
                $query->where('cycle_id',$cycle->id);
            })->whereHas('evaluation.performance',function($query)use($competencies){
                $query->where('competence_id',$competencies[0]->id);
            })->where('student_id',$id)->get();            
            $evidencesAvg = $evidences->avg('puntaje');        
            $scoreCollection->push($evidencesAvg);
        }
        //dd($scoreCollection);
        $chart = Charts::create('line', 'highcharts')
        ->title('Desempeño')
        ->elementLabel('Desempeño')
        ->labels($cycles->pluck('semestre'))
        ->values($scoreCollection)
        ->dimensions(1000,500)
        ->responsive(false);

        $data =[
            'chart' => $chart,
            'competencies' => $competencies,
        ];
        return view('reports.studentGraph',$data);
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
        // $levels = Level::whereHas(['evaluation.performance.competence' => function($query)use($competenceId){
        //     $query->where('id',$competenceId);
        // }])->get();

        //Por cada alumno
        foreach ($schedule->students as $student) {

            //Evidencias filtradas por alumnos y competencia
            $evidences = Evidence::whereHas('evaluation.performance.competence',function($query)use($competenceId){
                $query->where('id',$competenceId);
            })->where('student_id',$student->id)->get();
            // $onlineEvaluations = OnlineEvaluation::where('student_id',$student->id)->whereHas(['poll.evaluation.performance.competence' => function($query)use($competenceId){
            //     $query->where('id',$competenceId);
            // }])->get();                                    
            $evidencesAvg = $evidences->avg('puntaje');
            // $onlineAvg = $onlineEvaluations->avg('puntaje');            
            $scoreCollection->push($evidencesAvg);
        }
        // dd($scoreCollection);
        $data = [
            'students' => $schedule->students,
            'scoreCollection' => $scoreCollection,
            'highScore' => 20.0,
            'midScore' => 15.0,
            'lowScore' => 10.0,
        ];        
        return view('reports.scheduleReport',$data);
    }


}

<?php

namespace App\Http\Controllers;

use App\Directevaluation;
use App\Evaluation;
use App\Schedule;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DirectevaluationController extends Controller
{
    public function chooseStudent($id)
    {
        $evaluation = Evaluation::select(['id','schedule_id'])->where('id',$id)->with('schedule')->first();
        $schedule = Schedule::where('id',$evaluation->schedule_id)->first();        
        $students = $schedule->students;
        $data = [
            'students' => $students,
            'evaluation' => $evaluation,
        ];
        return view('directevaluations.chooseStudent',$data);
    }

    public function putScoreGet($id,$ev)
    {   
        // dd($id);            
        $evaluation = Evaluation::where('id',$id)->with('levels')->first(); 
        // dd($evaluation);            
        $student = Student::where('id',$ev)->first();
        // dd($student);
        $data = [
            'evaluation' => $evaluation,
            'student' => $student,
        ];
        return view('directevaluations.putScore',$data);
    } 

    public function putScorePost(Request $request)
    {
        try{               
            $directEv = new Directevaluation; 
            $directEv->student_id;
            $directEv->evaluation_id;
            $directEv->fechaEvaluacion = Carbon::now();
            $directEv->observaciones = $request['observaciones'];
            $puntajeTotal = collect();
            foreach ($request['scores'] as $levelId => $score) {
                $puntajeTotal->push($score);
            }
            $directEv->puntaje = $puntajeTotal->sum();
            $directEv->save();
            return redirect()->route('evaluacion.index')->with('success','Se registro un puntaje');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Error en el proceso');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\directevaluation  $directevaluation
     * @return \Illuminate\Http\Response
     */
    public function show(directevaluation $directevaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\directevaluation  $directevaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(directevaluation $directevaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\directevaluation  $directevaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, directevaluation $directevaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\directevaluation  $directevaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(directevaluation $directevaluation)
    {
        //
    }
}

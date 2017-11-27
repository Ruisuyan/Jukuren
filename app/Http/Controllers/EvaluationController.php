<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Schedule;
use App\Teacher;
use App\Level;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        $data = [
            'evaluations' => $evaluations,
        ];
        return view('evaluations.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function chooseScheduleGet()
    {
        $userId = auth()->user()->id;
        $teacher = Teacher::where('user_id',$userId)->first();        
        $data = [
            'teacher' => $teacher,            
        ];
        //dd($userId);
        return view('evaluations.chooseSchedule',$data);
    }

    public function chooseSchedulePost(Request $request)
    {
        $scheduleId = $request['scheduleId'];
        return redirect()->route('evaluacion.create',$scheduleId);
    }

    public function create($id)
    {
        $schedule = Schedule::where('id',$id)->first();
        $teacherId = $schedule->teacher->id;
        $data = [
            'scheduleId' => $schedule->id,
            'teacherId' => $teacherId,
            'performances' => $schedule->course->performances->pluck('nombre','id'),
        ];
        //dd($data);
        return view('evaluations.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        try{
            
            // $level->gradoAlto = $request['gradoAlto'];
            // $level->gradoMedio = $request['gradoMedio'];
            // $level->gradoBajo = $request['gradoBajo'];
            // $level->puntajeAlto = $request['puntajeAlto'];
            // $level->puntajeMedio = $request['puntajeMedio'];
            // $level->puntajeBajo = $request['puntajeBajo'];
            
            //evaluacion
            $evaluation = new Evaluation;
            $evaluation->nombre = $request['nombre'];
            $evaluation->tipo = $request['tipo'];
            $evaluation->fechaInicio = $request['fechaInicio'];
            $evaluation->fechaFin = $request['fechaFin'];
            $evaluation->indicaciones = $request['indicaciones'];
            $evaluation->estado = 1;
            $evaluation->performance_id = $request['performanceId'];
            $evaluation->schedule_id = $request['scheduleId'];
            $evaluation->teacher_id = $request['teacherId'];
            $evaluation->save();

            // grado
            $puntajes = $request['puntaje'];
            //dd($puntajes);
            foreach ($request['clave'] as $key => $nombre) {
                $level = new Level;
                $level->nombre = $nombre;
                $level->puntaje = $puntajes[$key];
                $level->evaluation_id = $evaluation->id;
                $level->save();
            }

            return redirect()->route('evaluacion.index')->with('success','Se registró una evluación exitosamente');
        }catch(Exception $e){
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
}

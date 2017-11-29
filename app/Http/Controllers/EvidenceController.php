<?php

namespace App\Http\Controllers;

use App\Evidence;
use App\Course;
use App\Performance;
use App\Evaluation;
use App\Student;
use App\Schedule;
use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $evidences = Evidence::all();
        // $data = [
        //     'evidences' => $evidences,
        // ];
        // return view('evidences.index',$data);
    }

    public function uploadEvidenceGet($id)
    {
        $evaluation = Evaluation::where('id',$id)->first();                
        $data = [
            'evaluation' => $evaluation,
        ];
        return view('evidences.uploadEvidence',$data);
    }    

    public function uploadEvidencePost(Request $request,$id)
    {
        try{
            $student = Student::where('user_id',auth()->user()->id)->first();
            $evaluation = Evaluation::where('id',$id)->first();
            $path  = $request->file('archivo')->storeAs(
                'portafolio/'.$student->codigo.'/'.
                $evaluation->schedule->cycle->semestre.'/'.
                $evaluation->schedule->course->codigo.'/'.
                $evaluation->nombre,
                $request->file('archivo')->getClientOriginalName()
                //,'s3'
            );                        
            $evidence = new Evidence;
            $evidence->evaluation_id = $id;            
            $evidence->student_id = $student->id;
            $evidence->fechasubida = Carbon::now();
            $evidence->estado = 2;
            $evidence->comentario = $request['comentario'];            
            $evidence->nombreArchivo = $path;
            $evidence->save();
            return redirect()->route('alumno.myEvaluations')->with('success','Se registro un puntaje');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Error en el proceso');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $performances = Course::find(1)->performances()->get(); //Este id debe ser el que posee el profesor en el curso determinado        
        // //dd($performances);
        // $data = [
        //     'performances' => $performances->pluck('nombre','id'),
        // ];
        // return view('evidences.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // $file = $request->file('archivo');
            // $file->store('upload','public');
            $evidence = new Evidence;
            $evidence->nombre = $request['nombre'];
            $evidence->fechalimite = $request['fechalimite'];
            $evidence->indicaciones = $request['indicaciones'];
            $evidence->performance_id = $request['desempenho'];
            $evidence->estado = 1;
            $evidence->save();
            return redirect()->route('evidencia.index')->with('success','Se registró una evidencia exitosamente');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Ocurrió un error en el registro');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function show(Evidence $evidence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function edit(Evidence $evidence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evidence $evidence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evidence $evidence)
    {
        //
    }

    public function evidencesIndex($id)
    {
        $evidences = Evidence::where('evaluation_id',$id)->get();
        //dd($evidences);
        $data = [
            'evidences' => $evidences,
        ];
        return view('evidences.evidencesIndex',$data);
    }
    
    public function checkEvidenceGet($id)
    {
        $evidence = Evidence::where('id',$id)->first();
        //ruta: codigoAlumno/semestre/codigoCurso/nombreEvaluacion/archivo
        $studentArchive = Storage::url($evidence->nombreArchivo);
        $evaluation = Evaluation::where('id',$evidence->evaluation_id)->with('levels')->first();
        // $studentArchive = Storage::disk('s3')->temporaryUrl(
        //     $evidence->nombreArchivo, Carbon::now()->addMinutes(5)
        // );        
        $data = [
            'evidence' => $evidence,
            'studentArchive' => $studentArchive,
            'evaluation' => $evaluation,
        ];
        return view('evidences.checkEvidence',$data);
    }    

    public function checkEvidencePost(Request $request,$id)
    {
        try{
            $puntajeTotal = collect();
            foreach ($request['scores'] as $levelId => $score) {
                $puntajeTotal->push($score);
            }            
            $evidence = Evidence::where('id',$id)->first();            
            $evidence->observaciones = $request['observaciones'];            
            $evidence->puntaje = $puntajeTotal->sum();
            $evidence->save();
            return redirect()->route('evaluacion.index')->with('success','Revision de la evidencia culminada');
        }catch(Exception $e){
            return redirect()->back()->with('Evidencia corregida');
        }
    }
}

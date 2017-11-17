<?php

namespace App\Http\Controllers;

use App\Evidence;
use App\Course;
use App\Performance;
use App\Evaluation;
use App\Student;
use App\Schedule;
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
            $student = Student::where('user_id',auth()->user()->id)->first();
            $evidence = new Evidence;
            $evidence->evaluation_id = $id;            
            $evidence->student_id = $student->id;
            $evidence->fechasubida = Carbon::now();
            $evidence->estado = 2;
            $evidence->comentario = $request['comentario'];            
            $evidence->nombreArchivo = $path;
            $evidence->save();
            return redirect()->route('alumno.myEvaluations');
        }catch(Exception $e){
            return redirect()->back();
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
            return redirect()->route('evidencia.index');
        }catch(Exception $e){
            return redirect()->back();
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
        // $studentArchive = Storage::disk('s3')->temporaryUrl(
        //     '$evidence->nombreArchivo', Carbon::now()->addMinutes(5)
        // );        
        $data = [
            'evidence' => $evidence,
            'studentArchive' => $studentArchive,
        ];
        return view('evidences.checkEvidence',$data);
    }    

    public function checkEvidencePost(Request $request,$id)
    {
        try{
            $evidence = Evidence::where('id',$id)->first();
            //dd($request);
            $evidence->observaciones = $request['observaciones'];
            $evidence->puntaje = $request['puntaje'];
            $evidence->save();
            return redirect()->route('evaluacion.index');
        }catch(Exception $e){
            return redirect()->back();
        }
    }
}

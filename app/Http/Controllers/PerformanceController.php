<?php

namespace App\Http\Controllers;

use App\Performance;
use App\Competence;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performances = Performance::orderBy('nombre')->paginate(10);        
        // dd($performances);
        $data = [
            'performances' => $performances,
        ];
        return view('performances.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competences = Competence::all();
        $data = [
            'competences' => $competences->pluck('nombre','id'),
        ];
        return view('performances.create',$data);
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
            $performance = new Performance;
            $performance->nombre = $request['nombre'];
            $performance->descripcion = $request['descripcion'];
            $performance->competence_id = $request['competencia'];
            $performance->save();
            return redirect()->route('desempenho.index')->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $performance = Performance::find($id);        
        $data = [
            'performance' => $performance,        
        ];
        return view('performances.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $performance = Performance::find($id);
        $competences = Competence::all();
        $data = [
            'performance' => $performance,
            'competences' => $competences->pluck('nombre','id'),
        ];
        return view('performances.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $performance = Performance::find($id); 
            $performance->nombre = $request['nombre'];
            $performance->descripcion = $request['descripcion'];
            $performance->competence_id = $request['competencia'];
            $performance->save();

            return redirect()->route('desempenho.index',$id)->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $performance = Performance::find($id);
            $performance->delete();
            return redirect()->route('desempenho.index')->with('success', 'yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }

    
    //Asignar desempeño a curso
    public function assignToCourseGet($id)
    {
        $performance = Performance::find($id);
        $courses = Course::orderBy('codigo')->paginate(10);;        
        $data = [
            'performance' => $performance,
            'courses' => $courses,
        ];
        return view('performances.assignToCourse',$data);
    }

    public function assignToCoursePost(Request $request, $id)    
    {
        //dd($request);
        try{
            foreach($request['checks'] as $n => $courseId){
                $course = Course::where('id',$courseId)->first();                
                $course->performances()->attach($id);   
            }

            return redirect()->route('desempenho.index',$id)->with('success','Se asignó un desempeño a un curso');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Error en el proceso');
        }
    }
}

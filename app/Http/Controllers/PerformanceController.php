<?php

namespace App\Http\Controllers;

use App\Performance;
use App\Competence;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performances = Performance::all();        
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
    public function show(Performance $performance)
    {
        //
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
        $data = [
            'performance' => $performance,
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
            $performance->descripcion = $request['descripcion'];
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
}

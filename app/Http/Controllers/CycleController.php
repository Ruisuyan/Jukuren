<?php

namespace App\Http\Controllers;

use App\Cycle;
use App\Course;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cycles = Cycle::all()->sortBy('semestre');
        $data = [
            'cycles' => $cycles,
        ];
        return view('cycles.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cycles.create');
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
            $cycle = new Cycle;
            $cycle->anho = $request['anho'];
            $cycle->periodo = $request['periodo'];
            $cycle->semestre = $request['anho'].' - '.$request['periodo'];
            $cycle->fechainicio = $request['fechainicio'];
            $cycle->fechafin = $request['fechafin'];
            $cycle->estado = $request['estado'];
            $cycle->save();
            return redirect()->route('ciclo.index')->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function show(Cycle $cycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cycle $cycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cycle $cycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cycle $cycle)
    {
        //
    }
    
}

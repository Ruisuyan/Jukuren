<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Course;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all()->sortBy('nombres');
//        dd($teachers);
        $data = [
            'teachers' => $teachers,
        ];
        return view('teachers.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
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
            $teacher = new Teacher;
            $teacher->codigo = $request['codigo'];
            $teacher->nombres = $request['nombres'];
            $teacher->apellidoPaterno = $request['apellidoPaterno'];
            $teacher->apellidoMaterno = $request['apellidoMaterno'];
            $teacher->oficina = $request['oficina'];
            $teacher->email = $request['email'];
            $teacher->telefono = $request['telefono'];
            // $teacher->tiempoCompleto =  0;
            // if($request['tiempoCompleto']){
            //     $teacher->tiempoCompleto = $request['tiempoCompleto'];
            // }            
            //dd($teacher);
            $teacher->save();

            return redirect()->route('docente.index')->with('success','Se registró un docente exitosamente');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Ocurrió un error en el registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $courses = Course::all();
        $data = [
            'courses' => $courses->pluck('nombre','id'),
            'teacher' => $teacher,
        ];
        return view('teachers.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $courses = Course::all();
        $data = [
            'courses' => $courses->pluck('nombre','id'),
            'teacher' => $teacher,
        ];
        return view('teachers.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $teacher = Teacher::find($id);
            $teacher->codigo = $request['codigo'];
            $teacher->nombres = $request['nombres'];
            $teacher->apellidoPaterno = $request['apellidoPaterno'];
            $teacher->apellidoMaterno = $request['apellidoMaterno'];
            $teacher->oficina = $request['oficina'];
            $teacher->email = $request['email'];
            $teacher->telefono = $request['telefono'];
            // $teacher->tiempoCompleto =  0;
            $teacher->course_id = $request['curso'];
            // if($request['tiempoCompleto']){
            //     $teacher->tiempoCompleto = $request['tiempoCompleto'];
            // }
            $teacher->save();
            return redirect()->route('docente.index', $id)->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}

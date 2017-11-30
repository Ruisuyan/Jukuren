<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('codigo')->paginate(10);        
        $data = [
            'courses' => $courses,
        ];
        return view('courses.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            $course = new Course;
            $course->codigo = $request['codigo'];
            $course->nombre = $request['nombre'];
            $course->descripcion = $request['descripcion'];
            $course->cicloCurso = $request['cicloCurso'];
            $course->save();

            return redirect()->route('curso.index')->with('success','Se registró un curso exitosamente');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Ocurrió un error en el registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $data = [
            'course' => $course,
        ];
        return view('courses.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $data = [
            'course' => $course,
        ];
        return view('courses.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $course = Course::find($id);
            $course->codigo = $request['codigo'];
            $course->nombre = $request['nombre'];
            $course->descripcion = $request['descripcion'];
            $course->cicloCurso = $request['cicloCurso'];
            $course->save();
            return redirect()->route('curso.index',$id)->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $course = Course::find($id);
            $course->delete();
            return redirect()->route('curso.index')->with('success', 'yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }
}

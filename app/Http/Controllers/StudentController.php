<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $data = [
            'students' => $students,
        ];
        return view('students.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            $student = new Student;
            $student->codigo = $request['codigo'];
            $student->dni = $request['dni'];
            $student->nombres = $request['nombres'];
            $student->apellidoPaterno = $request['apellidoPaterno'];
            $student->apellidoMaterno = $request['apellidoMaterno'];
            $student->correo = $request['correo'];
            $student->telefono = $request['telefono'];
            $student->save();
            return redirect()->route('alumno.index')->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
     public function show(Student $student)
     {
         //
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $data = [
            'student' => $student,
        ];
        return view('students.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $student = Student::find($id);
            $student->codigo = $request['codigo'];
            $student->dni = $request['dni'];
            $student->nombres = $request['nombres'];
            $student->apellidoPaterno = $request['apellidoPaterno'];
            $student->apellidoMaterno = $request['apellidoMaterno'];
            $student->correo = $request['correo'];
            $student->telefono = $request['telefono'];
            $student->save();
            return redirect()->route('alumno.index',$id)->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}

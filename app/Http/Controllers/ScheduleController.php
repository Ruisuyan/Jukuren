<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Cycle;
use App\Course;
use App\Teacher;
use App\Student;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();
        $data = [
            'schedules' => $schedules,
        ];
        return view('schedules.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cycles = Cycle::all();
        $courses = Course::all();
        $data = [
            'cycles' => $cycles->pluck('semestre','id'),
            'courses' => $courses,
        ];
        return view('schedules.create',$data);
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
            $schedule = new Schedule;
            $schedule->codigo = $request['codigo'];
            $schedule->course_id = $request['courseId'];
            $schedule->cycle_id = $request['cicloAcademico'];
            $schedule->save();
            return redirect()->route('horario.index')->with('success','Se registró un horario exitosamente');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Ocurrió un error en el registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }

    public function assignToTeacherGet($id)
    {
        $schedule = Schedule::find($id);
        $teachers = Teacher::all();
        //dd($teachers);
        
        $data = [
            'teachers' => $teachers,
            'schedule' => $schedule,            
        ];
        //dd($data);
        return view('schedules.assignToTeacher',$data);
    }

    public function assignToTeacherPost(Request $request, $id)    
    {
        try{            
            $schedule = Schedule::where('id',$id)->get()->first();                
            $schedule->teacher_id = $request['teacherId'];
            $schedule->save();
            return redirect()->route('horario.index',$id)->with('success','Se asignó un docente a un horario');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Error en el proceso');
        }
    }

    public function assignToStudentsGet($id)
    {
        $schedule = Schedule::find($id);
        $students = Student::all();
        //dd($teachers);
        
        $data = [
            'students' => $students,
            'schedule' => $schedule,            
        ];
        //dd($data);
        return view('schedules.assignToStudents',$data);
    }

    public function assignToStudentsPost(Request $request, $id)    
    {
        try{
            foreach ($request['checks'] as $n => $studentId) {
                $student = Student::where('id',$studentId)->first();
                $student->schedules()->attach($id);
            }                        
            return redirect()->route('horario.index',$id)->with('success','Se asgino un grupo de alumnos a un horaio');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Error en el proceso');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Cycle;
use App\Course;
use App\Teacher;
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
            return redirect()->route('horario.index');
        }catch(Exception $e){
            return redirect()->back();
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
            return redirect()->route('ciclo.index',$id)->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }
}

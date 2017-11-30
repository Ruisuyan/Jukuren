<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Teacher;
use App\Evaluation;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $teacher = Teacher::where('user_id',$user_id)->first();
        $polls = Poll::with(['evaluation.schedule.teacher' => function($query)use($teacher){
            $query->where('id',$teacher->id);
        }])->get();
        $data = [
            'polls' => $polls,
        ];
        return view('polls.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $evaluation = Evaluation::where('id',$id)->first();
        $questions = Question::where('competence_id',$evaluation->performance->competence->id)->get();
        $data = [
            'evaluation'=> $evaluation,
            'questions' => $questions,            
        ];
        return view('polls.create',$data);
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
            $poll = new Poll;
            $poll->evaluation_id = $request['evaluationId'];
            $poll->save();
            //registrar las preguntas
            //OJO ver tambien si alguna pregunta ya se uso antes!!
            foreach($request['checks'] as $n => $questionId){
                $question = Question::where('id',$questionId)->get()->first();                
                $question->poll_id = $poll->id;               
                $question->save();
            }
            return redirect()->route('evaluacion.index')->with('success','Se registró un cuestionario exitosamente');
        }catch(Exception $e){
            return redirect()->back()->with('warning','Ocurrió un error en el registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function edit(Poll $poll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poll $poll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poll $poll)
    {
        //
    }
}

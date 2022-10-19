<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\Grade;
use App\Models\Question;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $user_id=auth()->user()->id;

        // $asses=Grade::get()->where('student_id', $user_id);
        // dd($asses->assesment);
        
        // // $grades=Grade::where('student_id', $user_id)->first();
        $exam=Assesment::where('Status', 'Publish')->get();
        // foreach ($exam as $ex ) {
        //     $check = Grade::where('assesment_id', $ex->id)->where('student_id', $user_id)->get();
        // //     if (count($check) == 0) {
        //     // $check = Grade::where('student_id', $user_id)->where('assesment_id', $ex->id)->get();
        //     $count=$check->count();
        //     if ($count != 0) {
        //         $asses=Assesment::where('assesment_id', '!=', $ex->id);
        //         dd($asses);
        //     //     // return view('Assesment.Student.Index')->with('exam', $exam);
        //     }
        // }
        return view('assesment.student.index')->with('exam', $exam);
        //     // else {
        //     //     echo $check;
        //     // }
        // }
        // dd($grades);

        // if ($exam->id==$grades->id) {
        //     ddd('Exam already Written');
        // } else {
        //     ddd('Exam not written.');
        // }
        // dd($exam);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd();
        //
        $que['que']=$request->get('que');
        $answer=$request->get('option');
        foreach ($answer as $key => $value)
        {
            $question=Question::find($key);
            $grade=new Grade;
            $grade->assesment_id=$question->assesment_id;
            $grade->question_id=$question->id;
            $grade->student_id=auth('student')->user()->id;
            if ($question->answer == $value) {
                $grade->score=$question->marks;
                // echo $quest." = ".$answer."  ";
            } else {
                // echo '0';
                $grade->score = 0 ;
            }
            $grade->save();
        }
        return redirect('result');
    }
// 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam=Question::where('assesment_id', $id)->get();
        return view('Assesment.Student.show')->with('exam', $exam);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function results()
    {
        
        // $user_id=auth('student')->user()->id;

        // $grades=Grade::get()->where('student_id', $user_id)->sum('score');
        // dd($grades);
        $asses = collect();
        foreach ( auth('student')->user()->grade as $lesson )
        {
            $asses->push( $lesson->assesment );
        }

        dd($asses);
        // $asses=Assesment::get();
        // foreach ($asses as $asse ) {
        //     // $teares=Question::get()->where('assesment_id', $asse->id);
        //     // dd($teares);
        //     $studres=Grade::get()->where('assesment_id', $asse->id)->where('student_id', $user_id);
        //     dd($studres);
        // //     // echo $studres->sum('score').' out of '.$teares->sum('marks');
        // //     // break;
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
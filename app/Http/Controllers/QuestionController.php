<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assesment.teacher.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value=$request->validate([
           'question'=>'required',
           'answer'=>'required',
           'marks'=>'required',
           'option1'=>'required',
           'option2'=>'required', 
           'option3'=>'required', 
           'option4'=>'required', 
        ]);

        $question=new Question;
        $asses=Assesment::get()->last();
        $question->assesment_id=$asses->id;
        $question->question=$value['question'];
        $question->answer=$value['answer'];
        $question->marks=$value['marks'];
        $question->Option_1=$value['option1'];
        $question->Option_2=$value['option2'];
        $question->Option_3=$value['option3'];
        $question->Option_4=$value['option4'];
        $res=$question->save();
        if($res){
            return redirect('quemake');
        }else {
            dd('Failed to Create Question.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $que=Question::where('id', $id)->first();
        return view('assesment.teacher.question.edit')->with('que', $que);
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
        $value=$request->validate([
            'question'=>'required',
            'answer'=>'required',
            'marks'=>'required',
            'option1'=>'required',
            'option2'=>'required', 
            'option3'=>'required', 
            'option4'=>'required', 
         ]);
 
         $question=Question::where('id', $id)->first();
         $question->question=$value['question'];
         $question->answer=$value['answer'];
         $question->marks=$value['marks'];
         $question->Option_1=$value['option1'];
         $question->Option_2=$value['option2'];
         $question->Option_3=$value['option3'];
         $question->Option_4=$value['option4'];
         $res=$question->update();
         if($res){
            return redirect('asses');
         }else {
            dd('Failed to Create Question.');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $que=Question::where('id', $id)->delete();
        if ($que) {
            return redirect('asses');
        } else {
            dd('Failed to delete Question.');
        }
    }
}

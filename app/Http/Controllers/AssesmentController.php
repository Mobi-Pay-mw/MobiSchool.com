<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\Lesson;
use App\Models\Question;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asses = Assesment::get();
        return view('Assesment.Teacher.Assesment')->with('asses', $asses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Assesment.Teacher.Createasses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $values=$request->validate([
            'type'=>'required',
            'status'=>'required'
        ]);

        $asses=new Assesment;
        $less=Lesson::get()->first();
        $asses->lesson_id=$less->id;
        $asses->name=$values['type'];
        $asses->status=$values['status'];
        $res=$asses->save();

        if ($res) {
            return redirect('/asses');
        } else {
            
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
        $asses=Question::get()->where('assesment_id', $id);
        return view('Assesment.Teacher.Question.index')->with('asses', $asses);
        // dd($asses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asses=Assesment::where('id', $id)->first();
        return view('Assesment.Teacher.Edit')->with('asses', $asses);
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
        $values=$request->validate([
            'type'=>'required',
            'status'=>'required'
        ]);

        $asses=Assesment::find($id);
        $asses->name=$values['type'];
        $asses->status=$values['status'];
        $res=$asses->update();
        if ($res) {
            return redirect('/asses');
        } else {
            dd('Failed to update assesment.');
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
        $asses=Assesment::where('id', $id)->delete();
        if ($asses) {
            return redirect('asses');
        } else {
            dd('Failed to delete assesment.');
        }
        
    }
}
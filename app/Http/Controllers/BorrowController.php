<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Borrow;
use App\Models\Library;
use App\Models\Student;
use App\Models\Transaction;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $borrowed=Borrow::where('return_date', '<=', Carbon::now())->where('student_id', auth('student')->user()->id)->get();
        // foreach ($borrowed as $key => $value) {
        //     return view('library.borrowed')->with('value', $value);
        // }
        $borrowed = Borrow::with('books')->where('return_date', '<=', Carbon::now())->where('student_id', auth('student')->user()->id)->get();
        // dd($borrowed->id);
        return view('library.borrowed')->with('borrowed', $borrowed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        return view('Library.borrow', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'date'=>['required', 'date', 'after:today']
        ]);

        $lib=Library::find($request['id']);
        $stud=Student::all()->last();
        $transin=new Transaction;
        $transin->student_id=$stud->id;
        $transin->library_id=$request['id'];
        if($lib->price > 0)
        {
            $transin->type='loan';
        }
        else{
            $transin->type='borrowed';
        }
        if($transin->save()){
            $var=new Borrow;
            $var->student_id=$stud->id;
            $var->library_id=$request['id'];
            $var->borrow_date=Carbon::now();
            $trans=Transaction::all()->last();
            $var->transaction_id=$trans->id;
            $var->return_date=$request['date'];
            $res=$var->save();
            if ($res) {
                return redirect('/library');
            }
            else{
                dd('Failed to insert Loan');
            }
        }else{
            dd('Failed to insert Transaction');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

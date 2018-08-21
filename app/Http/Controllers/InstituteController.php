<?php

namespace App\Http\Controllers;

use App\Institute;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
        $this->middleware('profile')->only('store');

        // $this->middleware('log')->only('index');

        // $this->middleware('subscribed')->except('store');

    }
    public function index()
    { 
        $a= Institute::all()->first();

        return view('institute',['institute'=>$a]);
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
       $a= Institute::find(1);
        $a->name=$request->name;
        $a->contact=$request->contact;
        $a->email=$request->email;
        $a->registration_no=$request->registration_no;
        $a->address=$request->address;
        $img = $request->file('image');
        if(!is_null($img)){
            $img_dest = 'uploads';
            $img->move($img_dest,$img->getClientOriginalName());
            $a->image=$img->getClientOriginalName();
        }
        $a->save();
        $msg = 'Institute is added';
        return response()->json(array($msg),200);
       
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function show(Institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function edit(Institute $institute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institute $institute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institute  $institute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institute $institute)
    {
        //
    }
}

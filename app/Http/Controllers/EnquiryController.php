<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Course;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');


        // $this->middleware('log')->only('index');

        // $this->middleware('subscribed')->except('store');

    }
    public function index()
    {
        $a = Course::all();
        return view('enquiry',['courses'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $a=Enquiry::paginate(5);
        return view('enquiry_view',['enquiries'=>$a]);
    
    }
     public function showEnquery(){     
     $a=Enquiry::paginate(5);
        return view('enquiry_table',['enquiries'=>$a]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $a = new Enquiry();
        $a->name=$request->name;
        $a->email=$request->email;
        $a->course_id=$request->course;
        $a->contact=$request->contact;
        $a->address=$request->address;
        $a->save();
        $msg="your Enquiry added";
        return response()->json($msg); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {

 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\StudentFees;
use Illuminate\Http\Request;

class StudentFeesController extends Controller
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
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function show(StudentFees $studentFees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentFees $studentFees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentFees $studentFees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentFees  $studentFees
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentFees $studentFees)
    {
        //
    }
}

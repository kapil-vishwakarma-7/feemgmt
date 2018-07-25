<?php

namespace App\Http\Controllers;

use App\Marksheet;
use Illuminate\Http\Request;

class MarksheetController extends Controller
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
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function show(Marksheet $marksheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function edit(Marksheet $marksheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marksheet $marksheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marksheet $marksheet)
    {
        //
    }
}

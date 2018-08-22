<?php

namespace App\Http\Controllers;

use App\Fees;
use Illuminate\Http\Request;
use App\Admission;

class FeesController extends Controller
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
        $fees = new Fees;
        $fees->student_id = $request->student_id;
        $fees->course_id = $request->course_id;
        $fees->semester_id = $request->semester;
        $fees->fee_type = $request->fee_type;
        $fees->fee_date = $request->fee_date;
        $fees->amount = $request->amount;
        $fees->discount = $request->discount;
        $fees->payment_mode = $request->payment_mode;
        $fees->upi = $request->upi;
        $fees->cheque_no = $request->cheque_no;
        $fees->description = $request->description;
        $fees->late_fee = $request->late_fee;

        $rn = Fees::where('fee_date',$request->fee_date)->count();

        $fd = $request->fee_date;
        $fees->recipt_no = substr($fd, 0,4).substr($fd, 5,2).substr($fd,8,2).$rn;
        $fees->save();


        $student = Admission::find($request->student_id);
        $div1 = (String) view('include.show_fee',['student'=>$student]);
        $div2 = (String) view('include.show_fee_detail',['student'=>$student]);
        $data = ['div1'=>$div1,'div2'=>$div2,'student'=>$student];

        return response()->json($data,200);
        
        // return view('include.show_fee_detail',['student'=>$student]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fees  $fees
    * @return \Illuminate\Http\Response
     */
    public function show(Fees $fees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees $fees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fees $fees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fees  $fees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fees)
    {
        //
    }

    public function feesPay($id){
        $u = Admission::find($id);
        // dd($u->studentfees);
        $res=NULL;
        return view('fees_pay',['res'=>$res,'student'=>$u]);
    }
    public function feeSlip(Request $request){
 
        $r = Fees::find($request->id);
        $i = \App\Institute::all()->first();
        return view('docs.feeslip',['e'=>$r,'i'=>$i]);

    }
}

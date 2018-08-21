<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeesMaster;
use App\Admission;
use App\Course;
use App\Semester;
use App\Fees;
use App\AcademicYear;
use App\StudentFee;
class FeesMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
        $this->middleware('feemaster')->only(['store','update']);


        // $this->middleware('log')->only('index');

        // $this->middleware('subscribed')->except('store');

    }
    public function index()
    {
        $course = Course::all();
        $feeMasters = NULL; 
        $years = AcademicYear::orderBy('year')->get();
        
        // dd($course[1]->feeMaster);


        return view('add_fees',['years'=>$years,'masters' => $feeMasters,'res' => NULL,'course'=>$course]);
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
        $fees=new FeesMaster;
        $fees->course_id=$request->course_id;
        $fees->ac_year=$request->ac_year;
        $fees->fees_type=$request->fees_type;
        $fees->amount=$request->amount;
        $fees->semester_id=$request->semester;
        $fees->save();

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
        $fees=FeesMaster::find($id);
        // return response()->json($request,200);
        // $fees->$course_id=$request->fee_id;
        $fees->fees_type=$request->fees_type;
        $fees->amount=$request->fee_amount;
        // $fees->semester_id=$request->semester;
        $fees->save();
        return response()->json($request,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FeesMaster::destroy($id);     
    }

    public function searchStudent(Request $request){

        // get value
        $id  = $request->id;
        $sem = $request->semester;
        $ac_year = $request->year;
        $course = $request->course;

        // $name  = $request->name;


        $res = Admission::where('hr_id',1);
        // dd($res->where('id',2)->get());    
        // query

      
        if(!is_null($id)){
            $res = Admission::where('id',$id);
        }
        if(!is_null($ac_year)){
            $res->where('admission_year',$ac_year);
        }
        if(!is_null($course)){
            $res->where('course_id',$course);
        }
        if(!is_null($sem)){
            $res->where('semester',$sem);
        }

        //return
            // $res = Admission::all();
          //var_dump($res->get());
            //die();
           return view('master_fees_table',['res'=>$res->get()]);    
    }

    public function getFeeMaster(Request $request){
        $course_id = $request->id;
        // dd($course_id);
        $masters = FeesMaster::where('course_id',$request->id)->where('ac_year',$request->year)->orderBy('semester_id')->get();
        return view('fees_master_table',['masters'=>$masters]);
    }

    public function getSemester(Request $r){
        // dd($r->id);
        $course=Course::find($r->id);
         $str='';
         foreach($course->semesters as $sem){
            $str = $str."<option value='$sem->id'>$sem->name</option>";
         }
        return response()->json($str,200);
    
    }
    public function getFeeType(Request $request){
        $year = $request->year;
        $sem = Semester::find($request->sem_id);
        $feeType = $sem->feemasters->where('ac_year',$year);

        $str = '';
        $str = $str."<option hidden selected disabled>Type</option>";
        foreach($feeType as $f){
            $str = $str."<option value='$f->id'>$f->fees_type</option>";
         }
         $str1 = ['str'=>$str];
        return response()->json($str1,200);
    }
    public function getFeeAmount(Request $request){
        $a = StudentFee::where('admission_id',$request->sid)->where('semester_id',$request->id)->get()->first()->amount;
        return response()->json($a,200);   
    }

    public function getDueFeeAmount(Request $request){
        $student_id = $request->sid;
        $semester = $request->sem;

        $fees = Fees::where('student_id',$student_id)->where('semester_id',$semester)->get();
        $amount = $fees->sum('amount');
        // dd($amount);

        return response()->json($amount ,200);


    }

}

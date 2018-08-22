<?php

namespace App\Http\Controllers;
use DB;
use App\Admission;
use App\Course;
use App\FeesMaster;
use App\Semester;
use Illuminate\Http\Request;
use App\AcademicYear;
class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
        $this->middleware('admission')->only(['store','update','destroy']);

        // $this->middleware('log')->only('index');

        // $this->middleware('subscribed')->except('store');

    }

    public function index()
    {
        $years = AcademicYear::all();
        $a=Course::all();
        return view('admission',['res'=>NULL,'years'=>$years,'courses'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a=Admission::all();
        $years = AcademicYear::all();
        $c=Course::all(); 
        $res = NULL;
        // dd($res);



        return view('admission_list',['res'=>$res,'admissions'=>$a,'year'=>$years,'course'=>$c]);
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $a = new Admission();
        $a->student_name=$request->fullname;
        $a->email=$request->email;
        $a->student_contact=$request->student_contact;
        $a->gender=$request->gender;
        $a->father_name=$request->gdname;
        $a->father_mobile=$request->father_mobile;
        $a->mother_name=$request->mother_name;
        $a->dob=$request->dob;
        $a->permanent_add=$request->permanent_add;
        $a->current_add=$request->current_add;
        $a->category=$request->category;
        $a->cast=$request->cast;
        $a->admission_year=$request->admission_year;
        $a->medium=$request->medium;
        $a->adhar_no=$request->adhar_no;
        $a->exam=$request->exam;
        $a->subject=$request->subject;
        $a->board=$request->board;
        $a->year=$request->year;
        $a->obtain_mark=$request->obtain_mark;
        $a->total_mark=$request->total_mark;
        $a->percentage=$request->percentage;    
        $a->course_id=$request->course_id;
        $img = $request->file('image');
        $img_marksheet = $request->file('image_marksheet');
        $img_adhar = $request->file('image_adhar');
        $img_dest = 'uploads';
        $img->move($img_dest,$img->getClientOriginalName());
        $a->image=$img->getClientOriginalName();
        $img_marksheet->move($img_dest,$img_marksheet->getClientOriginalName());
        $img_adhar->move($img_dest,$img_adhar->getClientOriginalName());
        $a->image_marksheet=$img_marksheet->getClientOriginalName();
        $a->image_adhar=$img_adhar->getClientOriginalName();
        $a->save();
        $msg="Admission succesfully....";



        $ab = FeesMaster::where('course_id',$request->course_id)->where('ac_year',$a->admission_year)->select('semester_id', DB::raw('SUM(amount) as amount'))->groupBy('semester_id')->orderBy('semester_id')->get();
        
        return view('student_fee_content',['sem'=>$ab,'admission_id'=>$a->id]);
        
        return response()->json($msg);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $a)
    {

        print_r($request);
        $a->student_name=$request->fullname;
        $a->email=$request->email;
        $a->student_contact=$request->student_contact;
        $a->gender=$request->gender;
        $a->father_name=$request->gdname;
        $a->father_mobile=$request->father_mobile;
        $a->mother_name=$request->mother_name;
        $a->dob=$request->dob;
        $a->admission_year=$request->admission_year;
        $a->permanent_add=$request->permanent_add;
        $a->current_add=$request->current_add;
        $a->category=$request->category;
        $a->cast=$request->cast;
        $a->medium=$request->medium;
        $a->adhar_no=$request->adhar_no;
        $a->exam=$request->exam;
        $a->subject=$request->subject;
        $a->board=$request->board;
        $a->year=$request->year;
        $a->obtain_mark=$request->obtain_mark;
        $a->total_mark=$request->total_mark;
        $a->percentage=$request->percentage;    
        $a->course_id=$request->course_id;
        $img = $request->file('image');
        $img_marksheet = $request->file('image_marksheet');
        $img_adhar = $request->file('image_adhar');
        $img_dest = 'uploads';
        // $img->move($img_dest,$img->getClientOriginalName());
        // $a->image = $img->getClientOriginalName();
        // $img_marksheet->move($img_dest,$img_marksheet->getClientOriginalName());
        // $img_adhar->move($img_dest,$img_adhar->getClientOriginalName());
        // $a->image_marksheet=$img_marksheet->getClientOriginalName();
        // $a->image_adhar=$img_adhar->getClientOriginalName();
        $a->save();
        dd($request->gender[0]);
        $msg="Update succesfully....";
        return response()->json($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
    

    public function getSemester(Request $r){
        // dd($r->id);
        $course=Course::find($r->id);
         $str='<option selected disabled hidden value="">Select Year</option>';
         $i=1;
         
         foreach($course->semesters as $sem){
            $str = $str."<option value='$i'>$sem->name</option>";
            $i++;
         }
        return response()->json($str,200);
    }
    public function showStudentDetail($id){
          $a=Admission::find($id);
        return view('student_all_detail',['student'=>$a]);
    }
    public function studentUpdate($id){
          $a=Admission::find($id);
        return view('student_update',['student'=>$a]);
    } 

    public function admissionForm(Request $request){
            $id = $request->id;
            $a = Admission::find($id);
            return view('docs.fordesingcopyslip',['e'=>$a]);
    }
}

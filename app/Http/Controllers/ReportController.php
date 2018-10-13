<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\Fees;
use App\Enquiry;
use App\Course;
use App\Admission;
use DB;
use App\AcademicYear;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        
        $years = AcademicYear::all(); 
        $courses = Course::all(); 
        return view('report',['years'=>$years,'courses'=>$courses]);

    }

    function getEnquiry(Request $request){
        
        $a = Enquiry::whereBetween('created_at',[$request->from,$request->to.' 12:00:00'])->get();
        return view('report_enq',['rep'=>$a]);

    }

    function getPaymentRecived(Request $request){
        $a = Fees::whereBetween('fee_date',[$request->from,$request->to])->get();
        $c = Course::all();
        $pm = Fees::select('payment_mode')->distinct('payment_mode')->get();
        return view('report_payment_recived',['rep'=>$a,'courses'=>$c,'pm'=>$pm]);
    }
    function feesPaidReport(Request $request){
        $year = $request->year;
        $course = $request->course;
        $sem = $request->semester;
        // $res = DB::select()->from('admissions AS a');
        $res = Admission::join('student_fees','student_fees.admission_id','=','admissions.id')->rightJoin('fees','fees.student_id','=','admissions.id')->selectRaw(DB::raw('*'))->groupBy('admissions.id','student_fees.semester_id')->havingRaw('sum(fees.amount) <= ? ',[DB::raw('student_fees.amount')]);
            if (!is_null($year)) {
                $res->where('admissions.admission_year',$year);
            }
            if (!is_null($course)) {
                $res->where('admissions.course_id',$course);
            }
            if (!is_null($year)) {
                $res->where('admissions.admission_year',$year);
            }
        $c = Course::all();
         

        return view('report_feespaid',['res'=>$res->get(),'courses'=>$c]);
    }
    public function feesDueReport(Request $request){

        $year = $request->year;
        $course = $request->course;
        $sem = $request->semester;
        $res = Admission::join('student_fees','student_fees.admission_id','=','admissions.id')->rightJoin('fees','fees.student_id','=','admissions.id')->selectRaw(DB::raw('*'))->groupBy('admissions.id','student_fees.semester_id')->havingRaw('sum(fees.amount) >= ? ',[DB::raw('student_fees.amount')]);
            if (!is_null($year)) {
                $res->where('admissions.admission_year',$year);
            }
            if (!is_null($course)) {
                $res->where('admissions.course_id',$course);
            }
            if (!is_null($year)) {
                $res->where('admissions.admission_year',$year);
            }

        $c = Course::all();
        return view('report_feesdue',['res'=>$res->get(),'courses'=>$c]);   
    
    }

//select a.id ,sf.amount as actaul_amount,sum(f.amount) as Paid from admissions as a JOIN student_fees as sf ON a.id = sf.admission_id RIGHT JOIN fees as f ON f.student_id =a.id group by a.id,sf.semester_id having sf.amount <= Paid;


    public function studentDetails(Request $request){
        $year = $request->year;
        $course = $request->course;
        $sem = $request->semester;

        $res = Admission::where('hr_id','=',1);

         if (!is_null($year)) {
                $res->where('admission_year',$year);
            }
            if (!is_null($course)) {
                $res->where('course_id',$course);
            }
            if (!is_null($sem)) {
                $res->where('semester',$sem);
            }
        return view('report_student_details',['students'=>$res->get()]);
    }

}

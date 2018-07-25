<?php

namespace App\Http\Controllers;

use App\Course;
use App\Semester;
use App\AcademicYear;
use Illuminate\Http\Request;

class CourseController extends Controller
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
        $courses = Course::all();
        $y = AcademicYear::all();
        
        return view('courses',['courses'=>$courses,'years'=>$y]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $a=Course::all();
       return response()->json($a);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $data = $request->except('_token');
            $a = count($data['course']);
           for($i=0; $i < $a; $i++){
          $semester = $data['semester'][$i];

            $s = new Course;
           
            $s->name = $data['course'][$i];
            $s->duration = $data['duration'][$i];
            
            $s->semester = $semester;
            $s->save();
            }    
           
               $a=Course::all();
               
               for($i=1;$i<=$semester;$i++){
                    $sem = new Semester;
                    $sem->name = $i;
                    $sem->course_id = $s->id;
                    $sem->save();
               }

               return view('coursetable',['courses'=>$a]);    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
       // $course->name = $request
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->name=$request->name;
        $course->duration=$request->duration;
        $course->academic_year=$request->academic_year;
        $course->semester=$request->semester;
        $course->save();
        $msg="Course added";
        return response()->json($msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
    }
    public function refreshCourse(){
                $a = Course::all();
                  return view('coursetable',['courses'=>$a]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{


    public function course(){
    	return $this->hasOne('App\Course','id','course_id')->withDefault(['name'=>'Not Found']);
    }

    public function fees(){
    	return $this->hasMany('App\Fees','student_id','id');
    	
    }
    public function semester(){
    	return $this->hasOne('App\Semester','id','semester')->withDefault(['name'=>"Not Found","course_id"=>0]);
    }

    public function studentfees(){
        return $this->hasMany('App\StudentFee','admission_id','id');
    }
}

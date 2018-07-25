<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{


    public function course(){
    	return $this->hasOne('App\Course','id','course_id');
    }

    public function fees(){
    	return $this->hasMany('App\Fees','student_id','id');
    }
    public function semester(){
    	return $this->hasOne('App\Semester','id','semester');
    }
}

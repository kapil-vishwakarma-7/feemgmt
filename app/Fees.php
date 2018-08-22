<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function semester(){
    	return $this->belongsTo('App\Semester','semester_id','id');
    }
    public function student(){
    	return $this->belongsTo('App\Admission','student_id','id');
    }
}

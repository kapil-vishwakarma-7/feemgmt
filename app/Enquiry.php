<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    public function course(){
    	return $this->belongsTo('App\Course');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesMaster extends Model
{
    protected $table = 'feesmasters';
    public function course(){
    	return $this->belongsTo('App\Course');
    }
    public function semester(){
    	return $this->belongsTo('App\Semester');
    }
    
}

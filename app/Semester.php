<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    
    public function feemasters(){
    	return $this->hasMany('App\FeesMaster');
    }

}

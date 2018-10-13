<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    public function permission(){
    	return $this->belongsTo("App\Permission");
    }
}

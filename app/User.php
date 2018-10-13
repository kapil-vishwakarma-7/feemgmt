<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $permission_array=[];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function __construct(){
        $p  = $this->permissions()->get();
        $arr = [];
        $i=0;

        foreach ($p as $e ) {
           $permission_array[$i] = $e["permission_id"];
            $i++;
            echo "string";
        }
        

    }
    public function permissions(){
        return $this->hasMany('App\UserPermission','user_id','id')->select('permission_id');
    }
    public function permission(){
        return $this->hasMany('App\UserPermission','user_id','id');
    }
}



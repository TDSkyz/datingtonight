<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function checkUserLogin($username, $password){
    	$checkUserLogin = DB::table('users')->where('username','=',$username)->where('password','=',$password)->count();
    	if($checkUserLogin >= 1){
    		return true;
    	} else {
    		return false;
    	}
    }

    public function getUsername($username){
    	return DB::table('users')->where('username','=',$username)->get();
    }

    public function getItems(){
    	return $this->all();
    }
    /*public function users_properties()
    {
    	return $this->hasOne('App\Model\user_properties');
    }*/
}

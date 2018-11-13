<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;

class AuthUserController extends Controller
{
	public function __construct(Users $mUser){
		$this->mUser = $mUser;
	}

    public function getLogin(){
    	return view('auth.users.default');
    }

    public function postLogin(Request $request){
    	$username = trim($request->username);
    	$password = trim($request->password);
    	$getUsername = $this->mUser->getUsername($username);
    	if($this->mUser->checkUserLogin($username,$password)){
    		$request->session()->put('checkUser',$getUsername);
    		return redirect()->route('datingtonight.index.index');
    	} else {
    		return redirect()->route('auth.users.default')->with('alert','Username or Password is invalid');
    	}
    }

    public function signUp(Request $request){
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $phonenumber= $request->phonenumber;
        $gender = $request->gender;
        $birthday = $request->birthday;
        $fullname = $request->fullname;
        $city = $request->city;
        $facebook = $request->facebook;
        if($this->mUser->checkUserExist($username)){
            return redirect()->route('auth.users.default')->with('alert','Username has been taken');
        }
        if($this->mUser->addNewUser($username,$password,$email,$phonenumber,$gender,$birthday,$fullname,$city,$facebook)){
            return redirect()->route('auth.users.default')->with('alert','Register Successful');
        } else {
            return redirect()->route('auth.users.default')->with('alert','Register Failed');
        }
    }

    public function logOut(Request $request){
    	$request->session()->flush();
    	return redirect()->route('auth.users.default');
    }
}

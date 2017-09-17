<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\User;

class UserController extends BaseController
{

	public function createUser(Request $request){

		if($request->ajax()){
			return response(User::create($request->all()));
		}
	}

	public function getUser(){
    $user = User::all();
    return view('user.user', compact('user'));
  }

	  public function editUser($user_id, Request $request){
	  	$user = User::where('user_id', $request->user_id)->first();
	  	return view('user.editUser', compact('user'));
  }

    public function updateUser(Request $request){
        $user = User::where('user_id',$request->user_id)->first();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->locale = $request->locale;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->birthdate = $request->birthdate;
        $user->gender = $request->gender;
        $user->race = $request->race;
        $user->save();
        return response($user);
    }


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

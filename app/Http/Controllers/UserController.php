<?php 
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
	public function postSignUp(Request $request) {

		$email = $request['email'];
		$firstname = $request['firstname'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->email = $email;
		$user->firstname = $firstname;
		$user->password = $password;

		$user->save();
		return redirect()->back();


	}

	public function postSignIn(Request $request) {
		
	}
}
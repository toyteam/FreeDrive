<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
* 
*/
class LoginController extends Controller
{
	public function welcome()
	{
		return view('index');
	}

	public function login()
	{
		return view('login');
	}

	public function login_check(Request $data)
	{
		$user_name = $data->input('user_name');
		$user_pw = $data->input('user_pw');

		if (! $user = User::findbyUsername($user_name) )
		{
			$errmessage = "<p>用户名或密码不正确</p>";
			return view('login', ['error' => $errmessage]);
		}

		$user_pw_hash = $user->user_pw;

		if (! password_verify($user_pw, $user_pw_hash))
		{
			$errmessage = "<p>用户名或密码不正确</p>";
			return view('login', ['error' => $errmessage]);			
		}

		$this->setsession($user);

		//----success----
		return view('explorer');
	}

	public function register()
	{
		return view('register');
	}

	public function register_check(Request $data)
	{
		$user_name = $data->input('user_name');
		$user_pw = $data->input('user_pw');
		$user_pw_hash = password_hash($user_pw, PASSWORD_DEFAULT);

		if(User::findbyUsername($user_name))
		{
			$errmessage = "<p>用户名已被注册</p>";
			return view('register', ['error'=>$errmessage]);
		}

		$userinfo = array(
			'user_name' => $user_name,
			'user_pw' => $user_pw_hash,
			'user_create_time' => time(),
			'user_last_login_time' => time(),
			'user_priority' => 0
		);
		if (!User::insertUserinfo($userinfo)) 
		{
			$errmessage = "<p>注册失败，请稍后重试</p>";
			return view('register', ['error'=>$errmessage]);
		}

		//-----success-----------
		return view('login');
	}

	private function setsession($user)
	{
		
	}
}
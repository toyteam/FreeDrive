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
		// $res = DB::table('user')->insert([
		// 	'user_name'=>'123',
		// 	'user_pw' => '1123',
		// 	'user_create_time' => '1',
		// 	'user_last_login_time' => '1',
		// 	'user_priority' => '1'
		// 	]);
		
		// DB::table('user')
		// ->where('user_id', '4')
		// ->update(
		// 	['user_name' => '5']
		// );
		
		// DB::table('user')
		// ->where('user_id','>=','5')
		// ->delete();

		// $data = DB::table('user')->get();
		// $data = DB::table('user')
		// ->whereRaw('user_id >= 3 && user_name != 0')
		// ->first(); 
		
		// $data = DB::table('user')
		// ->select('user_name','user_id','user_pw')
		// ->get();
		
		// DB::table('user')
		// ->chunk(2,function($user){
		// 	var_dump($user);
		// });
		
		// dd($data);	
		return view('index');
		
		// $user = User::all();
		// $user = User::findOrFail(1);
		// dd($user); 
		
		// $user = new User();
		// $user->user_name = '333';
		// $user->save();
		// dd($user);
	}

	public function login()
	{
		return view('login');
	}

	public function login_check(Request $data)
	{


		//----success----
		return view('explorer');
	}
}
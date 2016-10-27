<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user';

	protected $primaryKey = 'user_id';

	public $timestamps = false;

	public static function findbyUsername($username)
	{
		$user = User::where('user_name',$username)->first();

		if ($user) {
			return $user;
		} else {
			return null;
		}
	}

	public static function insertUserinfo($userinfo)
	{
		$issuccess = User::insert($userinfo);
		return $issuccess;
	}

	public static function updateUserinfo($user_id, $userinfo)
	{
		$num = User::where('user_id', $user_id)->update($userinfo);
		return $num;
	}
}

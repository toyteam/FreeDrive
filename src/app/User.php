<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'user';

	protected $primaryKey = 'user_id';

	public $timestamps = false;

	public function findbyUsername($username)
	{
		$user = User::where('user_name',$username);
		if ($user) {
			return $user;
		} else {
			return null;
		}
	}
}

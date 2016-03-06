<?php namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
	protected $table = 'users';
	//fillable 
	protected $fillable = ['firstname','lastname', 'email','tel', 'password'];

}

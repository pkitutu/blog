<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model {

	//

	public static $rules = [
		'name' => 'required'
	];

	protected $fillable = ['name','sex','dob'];

	public $timestamps = false;

}

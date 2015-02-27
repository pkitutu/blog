<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	//
	public static $rules = [
		'title' => 'required'
	];

	protected $fillable = ['title','body'];

}

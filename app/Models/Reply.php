<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model {

	//
	protected $fillable = ['post_id','reply'];

	public function post(){
        return $this->belongsTo('App\Post');
    }

}

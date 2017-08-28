<?php

namespace App;


use App\Post;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
protected $fillable = ['post_id','body'];



//comment belongs to a post


	public function post()
	{return $this->belongsTo(Post::class);}



public function user()
{
	# code...
	return $this->belongsTo(User::class);
}




}

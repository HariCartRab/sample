<?php

namespace App;


use App\Comment;
use App\User;
use App\Post;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assignment


protected $fillable = ['title','body'];


public function scopeFilter($query,$filters)
{

if($month = $filters['month']) {

	$query->whereMonth('created_at',Carbon::parse($month)->month);
}

if ($year = $filters['year']) {
$query->whereYear('created_at',$year);

}





}




public function comments(){
return $this->hasMany(Comment::class);}



public function addComment($body)

{

//another method..................
	//$this->comments()->create(['body' => $body]); or create(compact('body'));


Comment::create([

'body' => $body,
'post_id' => $this->id


	]);


}


public function user()
{
	# code...
	return $this->belongsTo(User::class);
}




public static function archives()

{

return static::selectRaw('year(created_at)year,monthname(created_at)month,count(*)published')
->groupBy('year','month')
->orderByRaw('min(created_at) desc')
->get();

}







}

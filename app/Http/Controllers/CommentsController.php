<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    //

public function store(Post $post)
{


$post->addComment(request('body'));


//instead this we can have a method in post ...........cause we are adding a comment to a post...have a method explicit for that...........
// Comment::create([

// 'body' => request('body'),
// 'post_id' => $post->id


// 	]);


return back();

}



}

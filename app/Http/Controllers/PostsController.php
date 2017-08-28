<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use App\User;
use Carbon\Carbon;
use Auth;



class PostsController extends Controller
{
    //

public function __construct()
{
	$this->middleware('auth')->except(['index','show']);
}




public function index()

{

//$posts = Post::orderBy('created_at','desc')->get();


$posts = Post::latest()->filter(request(['month','year']))->get();
// if($month = request('month')) {

// 	$posts->whereMonth('created_at',Carbon::parse($month)->month);
// }

// if ($year = request('year')) {
// $posts->whereYear('created_at',$year);

// }


// $posts = $posts->get();


$archives = Post::archives();
// $archives = Post::selectRaw('year(created_at)year,monthname(created_at)month,count(*)published')
// ->groupBy('year','month')
// ->orderByRaw('min(created_at) desc')
// ->get();
//->toArray();  is not req here cause we r dir fetching it....


//return $archives;

return view('posts.index',compact('posts'));

}



public function show($id)
{

$post = Post::find($id);
$archives = Post::archives();
return view('posts.show',compact('post'));

}

public function create()

{return view('posts.create');}

   public function store()

   {




auth()->user()->publish(new Post (request(['title','body'])));



// Post::create(['title' => request('title'),
// 	'body' => request('body'),
// 'user_id' => $uid
// 	]);
 return redirect('/posts');

//    }



}
}

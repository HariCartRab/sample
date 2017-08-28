@include('layouts.app')
@include('layouts.sidebar')


show page of posts....also to show comments for each post............later user based posts and comments will be fetched....
<br><br>
 {{ $post->title }}
            {{ $post->body }}


<br><br>
to show comments.............include the show.blade.php  of the comments view folder later..........

@foreach ($post->comments as $comment)
{{ $comment->created_at->diffForHumans() }}

{{ $comment->body }}
@endforeach
<form method="POST" action="/posts/{{ $post->id }}/comments">    <!--/comments-->
  {{ csrf_field() }}

  <div class="form-group">
    <label for="Comment">Title</label>
    <textarea class="form-control" name="body" > </textarea>
  </div>
  
 
  <button type="submit" class="btn btn-success">Publish it</button>
</form>


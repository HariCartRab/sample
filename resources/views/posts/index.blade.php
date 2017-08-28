@include('layouts.app')

index page of posts

@include('layouts.sidebar')

@foreach ($posts as $post)

@include('posts.article')
          

@endforeach
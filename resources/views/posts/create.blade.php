@extends('layouts.app')



form to create posts...
<form method="POST" action="/posts">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <input type="textarea" class="form-control" id="body" name="body">
  </div>


  
 
  <button type="submit" class="btn btn-success">Post It</button>
</form>
@extends('layout.General')
@section('content')
<form action="{{Route('post.edit.form')}}" method="post">
  @csrf
  <h3>Form Edit ID:{{$post->id}} </h3>
  <div class="form-group">
    <input class="form-control" type="hidden" name="id" value="{{$post->id}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">content</label>
    <input type="text" class="form-control" name="content" placeholder="name@example.com" value="{{$post->content}}">
  </div>
  <button class="btn btn-success" style="float:right;">Submit</button>
</form>
@endsection

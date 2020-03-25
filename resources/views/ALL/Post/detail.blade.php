
@extends('layout.General')
@section('content')
<div class="container">
    <div> <a class="btn btn-success float-md-right" href="{{Route('post.edit',($post->id))}}">Edit</a></div>
   <div>
        <h3>Detail ID:{{$post->id}} </h3>
        <h3>Content:{{$post->content}}</h3>
        <h3>Create_at: {{$post->created_at}}</h3>
        <h3>Update_at: s{{$post->updated_at}}</h3>

   </div>
</div>

@endsection

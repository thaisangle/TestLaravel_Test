@extends('layout.General')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">content</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($post as $key => $value): ?>
          <tr >
            <td  scope="row" >
              {{$value->id}}
            </td>
            <td>
              {{$value->content}}
            </td>
            <td>
              {{$value->created_at}}
            </td>
            <td>
              {{$value->updated_at}}
            </td>
            <td>
              <a class="btn btn-sm btn-success"  href="{{Route('post.edit',$value->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
              <a class="btn btn-sm btn-warning"  href="{{Route('post.detail',$value->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <a class="btn btn-sm btn-danger"   href="{{Route('post.delete',$value->id)}}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
            </td>
          </tr>
      <?php endforeach; ?>


  </table>
@endsection

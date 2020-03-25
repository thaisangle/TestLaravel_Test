@extends('layout.General')
@section('content')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($user as $key => $value): ?>
            <tr >
              <td  scope="row" >
                {{$value->id}}
              </td>
              <td>
                {{$value->name}}
              </td>
              <td>
                {{$value->email}}
              </td>
              <td>
                {{$value->password}}
              </td>
              <td>
                <a class="btn btn-sm btn-success"  href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                <a class="btn btn-sm btn-warning"  href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                <a class="btn btn-sm btn-danger"   href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></i></a>
              </td>
            </tr>
        <?php endforeach; ?>


    </table>
@endsection

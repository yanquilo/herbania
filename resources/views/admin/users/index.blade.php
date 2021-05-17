@extends('adminite::page')

@section('title', 'Usuarios')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<table class="table table-striped" id="usuarios">

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Correo</th>
            <th>Incorporacion</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#usuarios').DataTable();
</script>
@endsection
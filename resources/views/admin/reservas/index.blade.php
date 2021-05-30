@extends('adminlte::page')

@section('title', 'Reservas')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<table class="table table-striped" id="reservas">

    <thead>
        <tr>
            <th>ID</th>
            <th>DNI/NIE</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reservas as $reserva)

        <tr>
            <td>{{$reserva->idreservas}}</td>
            <td>{{$reserva->dniNie}}</td>
            <td>{{$reserva->date}}</td>
            <td>{{$reserva->time}}</td>
            <td><a href="{{ url('cliente/edit') }}" class="button btn btn-default" style="background-color: black; color: white">Modificar</a></td>
            @method('DELETE')
            <td><button type="submit" class="btn btn-danger" role="button" style="background-color: red; color: black;">
                    Cancelar
            </button></td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#reservas').DataTable();
</script>
@endsection
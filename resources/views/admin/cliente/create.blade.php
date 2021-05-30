@extends('adminlte::page')

@section('title', 'Reservas')


@section('css')
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Reservar</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="post">
        @CSRF
        <div class="card-body">
            <div class="form-group">
                <label for="date">Fecha</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="time">Hora</label>
                <input type="time" name="time" class="form-control" id="time">
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @if(Session::has('correcto'))
    <div class="alert alert-success"> {{ Session::get('correcto') }}</div>
    @endif

    @if ($errors->any())
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
</div>

@stop

<!-- /.card -->
@section('js')
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@stop
@if (Session::has('success'))
<link rel="icon" href="/public/facturas/img/images.png">
@extends('plantilla.plantilla')
@section('titulo', 'Gracias por registrarte')
@section('contenido')
@include('plantilla.nav')
<div class="container mt-5">
    <div class="row">
        Gracias
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@include('plantilla.footer')
@endsection


@endif
<link rel="icon" href="http://localhost/ensure/public/app.css">
<link rel="icon" href="http://localhost/ensure/public/facturas/img/images.png">

@extends('plantilla.plantilla')
@section('titulo', 'Ensure y real madrid')
@section('contenido')
@include('plantilla.nav')
<div class="container mt-5">
    <div class="row">
        <h2 class="text-center text-white mt-4">Laravel 8 - Validación de Forms</h2>
        <!-- Con esta variable traemos un arreglo con  todos los mensajes de error -->
        <!-- {{$errors}} -->
        <div class="col-lg-6 col-12 mx-auto">
            <!-- Si todos los campos están validados, mostramos un mensaje de EXITO -->
            @if (Session::has("success"))
            <div class="alert alert-success alert-block ">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="p-5 bg-white rounded shadow-lg">
                <form method="post" action="guardar" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label>Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Apellido</label>
                        <input type="apellido" class="form-control @error('apellido') is-invalid @enderror" name="apellido" id="apellido" value="{{ old('apellido') }}">
                        @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Mobil</label>
                        <input type="text" class="form-control @error('mobil') is-invalid @enderror" name="mobil" id="mobil" value="{{ old('mobil') }}">
                        @error('mobil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Factura</label>
                        <input type="file" class="form-control @error('factura') is-invalid @enderror" name="factura" id="factura" value="{{ old('factura') }}">
                        @error('factura')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Numero de Factura</label>
                        <input type="text" class="form-control @error('n_factura') is-invalid @enderror" name="n_factura" id="n_factura" value="{{ old('n_factura') }}">
                        @error('n_factura')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="d-grid mt-3">
                        <input type="submit" name="send" value="Enviar" class="btn btn-primary btn-lg w-100 shadow-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@include('plantilla.footer')
@endsection

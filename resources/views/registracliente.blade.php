@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('REGISTRO DE CLIENTE') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO CLIENTE') }}
                    {{ session('status') }}

                    <form action="{{route('guardarcliente')}}" method="POST">
                        @csrf
                        <br>
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label>
                            Apellido: <br>
                            <input name="apellido" type="text">
                        </label>
                        <label>
                            Nit: <br>
                            <input name="nit" type="text">
                        </label>
                        <label>
                            Pago: <br>
                            <input name="pago" type="text">
                        </label>
                        
                        <br>
                        <button type="submit"class="btn btn-danger">Guardar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
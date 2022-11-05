@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('REGISTRO DE PRODUCTO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO PRODUCTO') }}
                    {{ session('status') }}

                    <form action="{{route('guardarproducto')}}" method="POST">
                        @csrf
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label>
                            Marca: <br>
                            <input name="marca" type="text">
                        </label>
                        <label>
                            Unidad: <br>
                            <input name="unidad" type="text">
                        </label>
                        <label>
                            Cantidad: <br>
                            <input name="cantidad" type="text">
                        </label>
                        <label>
                            Precio: <br>
                            <input name="precio" type="text">
                        </label>
                        <button type="submit">Guardar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
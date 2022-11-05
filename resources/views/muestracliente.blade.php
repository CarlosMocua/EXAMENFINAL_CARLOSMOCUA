@extends('layouts.log')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR CLIENTE') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese La Nueva Informacion') }}
                    {{ session('status') }}

                    <form action="{{route('editarcliente', $clientes->id)}}" method="POST">
                        @csrf
                       
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$clientes->nombre}}">
                        </label>
                        <label>
                            Apellido: <br>
                            <input name="apellido" type="text" value="{{$clientes->apellido}}">
                        </label>
                        <label>
                            Nit: <br>
                            <input name="nit" type="text" value="{{$clientes->nit}}">
                        </label>
                        <label>
                            Pago: <br>
                            <input name="pago" type="text" value="{{$clientes->Pago}}">
                        </label>
                        
                        <br>
                        <button type="submit"class="btn btn-danger">Guardar Cambios</button>
                        <a href="{{route('cancelaaccion')}}" class="btn btn-warning">Cancelar</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
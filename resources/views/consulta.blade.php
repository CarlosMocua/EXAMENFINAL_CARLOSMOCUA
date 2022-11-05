@extends('layouts.app')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <b><div class="card-header">{{ __('CONSULTA DE TODOS LOS CLIENTES') }}</div></b>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table col-12">
                        <thread>
                            
                                <tr>
                                    
                                    <td><b>NOMBRE</b></td>
                                    <td><b>APELLIDO</b></td>
                                    <td><b>NIT</b></td>
                                    <td><b>PAGO</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->apellido}}</td>
                                <td>{{$cliente->nit}}</td>
                                <td>{{$cliente->Pago}}</td>
                                <td>
                                <a href="{{route('eliminarcliente',$cliente->id)}}" class="btn btn-danger">Borrar</a>
                                </td>
                                <td>
                                <a href="{{route('muestracliente',$cliente->id)}}" class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
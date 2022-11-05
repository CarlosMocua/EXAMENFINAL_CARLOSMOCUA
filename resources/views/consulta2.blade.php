@extends('layouts.app')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <b><div class="card-header">{{ __('CONSULTA DE TODOS LOS PRODUCTOS') }}</div></b>

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
                                    <td><b>MARCA</b></td>
                                    <td><b>UNIDAD</b></td>
                                    <td><b>CANTIDAD</b></td>
                                    <td><b>PRECIO</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($productos as $producto)
                            
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->marca}}</td>
                                <td>{{$producto->unidad}}</td>
                                <td>{{$producto->cantidad}}</td>
                                <td>{{$producto->Precio}}</td>
                                <td>
                                <a href="{{route('eliminarproducto',$producto->id)}}" class="btn btn-danger">Borrar</a>
                                </td>
                                <td>
                                <a href="{{route('muestraproducto',$producto->id)}}" class="btn btn-warning">Editar</a>
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
@extends('layouts.log')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR PRODUCTO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese Nuevos Datos') }}
                    {{ session('status') }}

                    <form action="{{route('editarproducto', $productos->id)}}" method="POST">
                        @csrf
                       
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$productos->nombre}}">
                        </label>
                        <label>
                            Marca: <br>
                            <input name="marca" type="text" value="{{$productos->marca}}">
                        </label>
                        <label>
                            Unidad: <br>
                            <input name="unidad" type="text" value="{{$productos->unidad}}">
                        </label>
                        <label>
                            Cantidad: <br>
                            <input name="cantidad" type="text" value="{{$productos->cantidad}}">
                        </label>
                        <label>
                            Precio: <br>
                            <input name="precio" type="text" value="{{$productos->Precio}}">
                        </label>
                        <br>
                        <button type="submit"class="btn btn-danger">Guardar Cambios</button>
                        <a href="{{route('cancelaaccion1')}}" class="btn btn-warning">Cancelar</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
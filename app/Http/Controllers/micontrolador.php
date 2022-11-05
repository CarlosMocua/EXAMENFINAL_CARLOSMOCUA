<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\producto;

class micontrolador extends Controller
{
    
    public function registraproducto()
    {
        return view('registraproducto');
    }
    public function guardarproducto(Request $request)
    {
        $productos = new producto;
        $productos->nombre=$request->input('nombre');
        $productos->marca=$request->input('marca');
        $productos->unidad=$request->input('unidad');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio=$request->input('precio');
        $productos->save();

        return redirect()->route('registrarproducto');
    }

    public function registracliente()
    {
        return view('registracliente');
    }
    public function guardarcliente(Request $request)
    {
        $clientes = new cliente;
        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
        $clientes->nit=$request->input('nit');
        $clientes->pago=$request->input('pago');
        $clientes->save();

        return redirect()->route('registrarcliente');
    }
    
    public function consultaclientes(){
        $clientes = cliente::all();
        return view('consulta', compact('clientes'));
    }

    public function eliminarcliente($id){
        $cliente=cliente::find($id);
        $cliente->delete();
        return redirect()->route('consultaclientes');
    }

    public function consultaproductos(){
        $productos = producto::all();
        return view('consulta2', compact('productos'));
    }

    public function eliminarproducto($id){
        $producto=producto::find($id);
        $producto->delete();
        return redirect()->route('consultaproductos');
    }

    public function muestracliente($id){
        $clientes=cliente::find($id);
        return view('muestracliente', compact('clientes'));
    }
    public function editacliente(Request $request, $id){
        $clientes=cliente::find($id);

        $clientes->nombre=$request->input('nombre');
        $clientes->apellido=$request->input('apellido');
        $clientes->nit=$request->input('nit');
        $clientes->Pago=$request->input('pago');
        $clientes->save();
        return redirect()->route('consultaclientes');
    }

    public function muestraproducto($id){
        $productos=producto::find($id);
        return view('muestraproducto', compact('productos'));
    }
    public function editaproducto(Request $request, $id){
        $productos=producto::find($id);

        $productos->nombre=$request->input('nombre');
        $productos->marca=$request->input('marca');
        $productos->unidad=$request->input('unidad');
        $productos->cantidad=$request->input('cantidad');
        $productos->Precio=$request->input('precio');
        $productos->save();
        return redirect()->route('consultaproductos');
    }
    
} 


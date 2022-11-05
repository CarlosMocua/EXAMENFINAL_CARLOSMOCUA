<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editor;

class micontrolador extends Controller
{
    public function home(){

    return view ('home');
    }

    public function consultaeditores(){
        $editores = Editor::all();
        return view('consulta2', compact('editores'));
    }

    public function eliminarEditor($id){
        $editor=Editor::find($id);
        $editor->delete();
        return redirect()->route('consultaeditores');
    }

}  


<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function presentacion ($nombre,$apellido =null){
        $nombre_completo=strtoupper($nombre . ' ' . $apellido);
        /*dd($nombre); esta funcion regresa lo que hay en la variable pero truena la pagina*/
        return view('presentacion', compact('nombre','apellido'))
            ->with(['nombre_completo'=>$nombre_completo]);//pasamos el ombre a la vista
    }
    public function informacion (){
        return view ('informacion');
    }
    public function contact(){
        return view ('contacto');
    }
    public function recibeContacto(Request $request){
        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required','min:5','max:500'],
            'telefono' => 'numeric'
        ]);

        $contacto= new Contacto();
        $contacto->correo = $request->correo;
        $contacto->comentario=$request->comentario;
        $contacto->telefono=$request->telefono;
        $contacto->save();

        return redirect()->route('contacto');
    }
}

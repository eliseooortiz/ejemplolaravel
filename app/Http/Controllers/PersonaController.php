<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PersonaController extends Controller
{
    /*
    para declarar un constructor y llamar a los middleware ahi se hace asi:
    public function __construct(){
        $this.middelware('auth')->except('index','show');
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$personas=Persona::where('user_id',Auth::user());
        //$personas=Auth::user()->personas()->get();// si llamas al metodo asi puedes concatenr cosas al query
        $personas=Auth::user()->personas;//si utilizas esta forma no le puedes concatenar wheres o asi
        //$personas = Persona::all();
        //$personas=Personas::whit('areas')->get(); //con esto podiras ahorrarte unas consultas
        return view('personas/personasIndex',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $areas=Area::all();
        return view('personas/personasForm',compact('areas'));
        //opdemos pasar en lugar de con compact es el ->with(['areas'=>$areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Validar datos
         * Crear instancia del modelo
         * Asignar propiedades del modelo (columnas)
         * redireccionar a index
         */
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            //'codigo'=> 'required|max:255|unique:personas,codigo',
            'telefono' => 'numeric',
            //'correo' => 'required|email'

        ]);
        $request->merge([
            'user_id'=>Auth::id(),
            'apellido_materno'=>$request->apellido_materno ?? ''
        ]);
        $persona=Persona::create($request->all());
        $persona->areas()->attach($request->area_id);
        /*
        $persona= new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno ?? '';
        $persona->codigo = $request->codigo;
        $persona->telefono = $request->telefono ?? '';
        $persona->correo = $request->correo ?? '';
        $persona->save();
        */
        return redirect()->route('persona.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('personas/personasShow',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        $persona->load('areas');
        //carga los datos de la instancia a esa persona
        $areas=Area::all();
        return view('personas/personasForm',compact('persona','areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno'=> 'required',
            'apellido_materno'=> 'required',
            'codigo'=> [
                'required',
                'max:255',
                Rule::unique('personas')->ignore($persona->id),
            ],
            'telefono' => 'numeric',
            'correo' => 'required|email'

        ]);

        Persona::where('id',$persona->id)->update($request->except('_token','_method','area_id'));
        $persona->areas()->sync($request->area_id);

        /*
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno ?? '';
        $persona->codigo = $request->codigo;
        $persona->telefono = $request->telefono ?? '';
        $persona->correo = $request->correo ?? '';
        $persona->save();
        */
        return redirect()->route('persona.show',$persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index');
    }
}

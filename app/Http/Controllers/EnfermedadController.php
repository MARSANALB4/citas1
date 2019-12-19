<?php

namespace App\Http\Controllers;

use App\Enfermedad;
use App\Especialidad;
use App\Paciente;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedad = Enfermedad::all();

        return view('enfermedad/index',['enfermedad'=>$enfermedad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidad::all()->pluck('name','id');

        return view('enfermedad/create',['especialidades'=>$especialidades]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nombre_enfermedad' => 'required|max:255'
        ]);

        //TODO: crear validación propia para nuhsa
        $enfermedad = new Enfermedad($request->all());
        $enfermedad->save();


        flash('Enfermedad creada correctamente');

        return redirect()->route('enfermedad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermedad = Enfermedad::find($id);
        $especialidades = Especialidad::all()->pluck('name','id');

        return view('enfermedad/edit',['enfermedad'=>$enfermedad, 'especialidades'=>$especialidades ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre_enfermedad' => 'required|max:255'
        ]);

        //TODO: crear validación propia para nuhsa
        $enfermedad = Enfermedad::find($id);
        $enfermedad ->fill($request->all());
        $enfermedad->save();


        flash('Enfermedad editada correctamente');

        return redirect()->route('enfermedad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enfermedad = Enfermedad::find($id);
        $enfermedad->delete();
        flash('Enfermedad borrada correctamente');

        return redirect()->route('enfermedad.index');




    }
}

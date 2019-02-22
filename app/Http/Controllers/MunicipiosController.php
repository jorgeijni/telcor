<?php

namespace telcor\Http\Controllers;

use Illuminate\Http\Request;
use telcor\Municipios;
use telcor\Departamentos;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $muni=Municipios::Search($request->DescripcionDep)->orderBy('KeyMunicipio', 'ASC')->paginate(10);
        return view('admin.municipios.index')
            ->with('muni', $muni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depa = Departamentos::orderBy('KeyDepartamento', 'ASC')->Pluck('DescripcionDep', 'KeyDepartamento');
        return view('admin.municipios.create')->with('depa', $depa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $muni = new Municipios();
        $muni->KeyDepartamento =  $request->get('KeyDepartamento');
        $muni->DescripcionMun =  $request->get('descripcion');
        $muni->save();
        Flash("Se ha registrardo un Municipio de forma exitosa!")->success();
        return redirect()->route('municipios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muni = Municipios::find($id);
        $depa = Departamentos::orderBy('KeyDepartamento', 'ASC')->Pluck('DescripcionDep', 'KeyDepartamento');
        return view('admin.municipios.edit')
            ->with('muni', $muni)
            ->with('depa', $depa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $muni = Municipios::find($id);
        $muni->KeyDepartamento =  $request->get('KeyDepartamento');
        $muni->DescripcionMun =  $request->get('descripcion');
        $muni->update();

        //Flash::success("Se ha registrardo un Tipo de Cliente de forma exitosa!");
        Flash("Se ha Actualizado el Municipio de forma exitosa!")->success();
        return redirect()->route('municipios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muni = Municipios::find($id);
        $muni->delete();

        Flash('El Municipio ha sido borrado de forma exitosa', 'danger');
        return redirect()->route('municipios.index');
    }
}

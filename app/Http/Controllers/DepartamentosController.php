<?php

namespace telcor\Http\Controllers;

use Illuminate\Http\Request;
use telcor\Departamentos;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $depas=Departamentos::Search($request->DescripcionDep)->orderBy('KeyDepartamento', 'ASC')->paginate(10);
        return view('admin.departamentos.index')->with('depas', $depas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depa = new Departamentos();
        $depa->DescripcionDep =  $request->get('descripcion');
        $depa->save();
        Flash("Se ha registrardo un Departamento de forma exitosa!")->success();
        return redirect()->route('departamentos.index');
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
        $depa = Departamentos::find($id);
        return view('admin.departamentos.edit')->with('depa', $depa);
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
        $depa = Departamentos::find($id);
        $depa->DescripcionDep =  $request->get('descripcion');
        $depa->update();

        //Flash::success("Se ha registrardo un Tipo de Cliente de forma exitosa!");
        Flash("Se ha Actualizado el departamento de forma exitosa!")->success();
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depa = Departamentos::find($id);
        $depa->delete();

        Flash('El Departamento ha sido borrado de forma exitosa', 'danger');
        return redirect()->route('departamentos.index');
    }
}

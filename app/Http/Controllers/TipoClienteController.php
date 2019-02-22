<?php

namespace telcor\Http\Controllers;

use Illuminate\Http\Request;

use telcor\TipoClientes;
use Illuminate\Support\Facades\DB;

class TipoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipos=TipoClientes::Search($request->TipoCliente)->orderBy('KeyTipo', 'ASC')->paginate(10);
        return view('admin.tipo.index')->with('tipos', $tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new TipoClientes;
        $tipo->TipoCliente =  $request->get('tipocliente');
        $tipo->save();
        Flash("Se ha registrardo un Tipo de Cliente de forma exitosa!")->success();

        return redirect()->route('tipocliente.index');
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
        $tipo = TipoClientes::find($id);
        return view('admin.tipo.edit')->with('tipo', $tipo);
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
        $tipo = TipoClientes::find($id);
        $tipo->TipoCliente =  $request->get('tipocliente');
        $tipo->update();

        //Flash::success("Se ha registrardo un Tipo de Cliente de forma exitosa!");
        Flash("Se ha Actualizado el Tipo de Cliente de forma exitosa!")->success();
        return redirect()->route('tipocliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = TipoClientes::find($id);
        $tipo->delete();

        Flash('El Tipo de Cliente ha sido borrado de forma exitosa', 'danger');
        return redirect()->route('tipocliente.index');
    }
}

<?php

namespace telcor\Http\Controllers;

use Illuminate\Http\Request;
use telcor\Clientes;
use telcor\TipoClientes;
use telcor\Departamentos;
use telcor\Municipios;

use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $query = trim($request->get('searchText'));

       // $clis = Clientes::Search($request->Nombre)->orderBy('KeyCliente', 'ASC')->paginate(10);
        $clis = DB::table('Clientes')
            ->join('TipoClientes', 'Clientes.KeyTipo', '=', 'TipoClientes.KeyTipo')
            ->join('Departamento', 'Clientes.KeyDepartamento', '=', 'Departamento.KeyDepartamento')
            ->join('Municipio', 'Clientes.KeyMunicipio', '=', 'Municipio.KeyMunicipio')
            ->select('Clientes.KeyCliente', 'Clientes.Nombre', 'TipoClientes.TipoCliente', 'Clientes.Direccion', 'Departamento.DescripcionDep',
                'Municipio.DescripcionMun', 'Clientes.Fecha', 'Clientes.Email', 'Clientes.Telefono', 'Clientes.Saldo',
                'Clientes.Categoria')
            ->where('Clientes.Nombre', 'LIKE', '%' . $query . '%')
            ->paginate(10);

        return view('admin.clientes.index')->with('clis', $clis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depa = Departamentos::orderBy('KeyDepartamento', 'ASC')->Pluck('DescripcionDep', 'KeyDepartamento');
        $mun = Municipios::orderBy('KeyMunicipio', 'ASC')->Pluck('DescripcionMun', 'KeyMunicipio');
        $tipo = TipoClientes::orderBy('KeyTipo', 'ASC')->Pluck('TipoCliente', 'KeyTipo');
        return view('admin.clientes.create')
            ->with('depa', $depa)
            ->with('mun', $mun)
            ->with('tipo', $tipo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cli = new Clientes();
        $cli->Nombre = $request->get('Nombre');
        $cli->KeyTipo = $request->get('KeyTipo');
        $cli->Direccion = $request->get('Direccion');
        $cli->KeyDepartamento = $request->get('KeyDepartamento');
        $cli->KeyMunicipio = $request->get('KeyMunicipio');
        $cli->Fecha = $request->get('Fecha');
        $cli->Email = $request->get('Email');
        $cli->Telefono = $request->get('Telefono');
        $cli->Saldo = $request->get('Saldo');

        $prom = DB::table('Clientes')
            ->avg('saldo');

        if (  $request->get('Saldo') > $prom ){
            $cli->Categoria = "MOROSO";
        } else{
            $cli->Categoria = "BUEN CLIENTE";
        }

       $cli->save();
        Flash("Se ha registrardo un Cliente de forma exitosa!")->success();
        return redirect()->route('clientes.index');
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
        $cli = Clientes::find($id);
        $depa = Departamentos::orderBy('KeyDepartamento', 'ASC')->Pluck('DescripcionDep', 'KeyDepartamento');
        $mun = Municipios::orderBy('KeyMunicipio', 'ASC')->Pluck('DescripcionMun', 'KeyMunicipio');
        $tipo = TipoClientes::orderBy('KeyTipo', 'ASC')->Pluck('TipoCliente', 'KeyTipo');
        return view('admin.clientes.edit')
            ->with('cli', $cli)
            ->with('depa', $depa)
            ->with('mun', $mun)
            ->with('tipo', $tipo);
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
        $cli = Clientes::find($id);
        $cli->Nombre = $request->get('Nombre');
        $cli->KeyTipo = $request->get('KeyTipo');
        $cli->Direccion = $request->get('Direccion');
        $cli->KeyDepartamento = $request->get('KeyDepartamento');
        $cli->KeyMunicipio = $request->get('KeyMunicipio');
        $cli->Fecha = $request->get('Fecha');
        $cli->Email = $request->get('Email');
        $cli->Telefono = $request->get('Telefono');
        $cli->Saldo = $request->get('Saldo');
        $cli->update();
        Flash("Se ha Actualizado el Cliente de forma exitosa!")->success();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cli = Clientes::find($id);
        $cli->delete();

        Flash('El Cliente ha sido borrado de forma exitosa', 'danger');
        return redirect()->route('clientes.index');
    }
}

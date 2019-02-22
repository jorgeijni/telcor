@extends('template.main')

@section('title', 'Registrar Cliente')

@section('content')
    <a href="{{ route('clientes.create') }}" class="btn btn-info">Registrar Clientes</a><hr>
    <!-- BUSCADOR DE COBERTURAS -->
    {!! Form::open(['route' => 'clientes.index', 'method' => 'GET', 'class' => 'navbar-form pull-right'])  !!}
        <div class="input-group">
            {!! Form::text('searchText', null, ['class' => 'form-control', 'placeholder' => 'Buscar Cliente..', 'aria-describedy' => 'search']) !!}
            <span class="input-group-addon" id="search"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <!-- FIN DEL BUSCADOR -->
    <table class="table table-responsive">
        <thead>
            <th>KeyCliente</th>
            <th>Nombre</th>
            <th>Tipo Cliente</th>
            <th>Direccion</th>
            <th>Departamento</th>
            <th>Municipio</th>
            <th>Fecha</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Saldo</th>
            <th>Categoria</th>
            <th>Acción</th>
        </thead>
        <tbody>
        @foreach($clis as $cli)
            <tr>
                <td>{{ $cli->KeyCliente }}</td>
                <td>{{ $cli->Nombre }}</td>
                <td>{{ $cli->TipoCliente }}</td>
                <td>{{ $cli->Direccion }}</td>
                <td>{{ $cli->DescripcionDep }}</td>
                <td>{{ $cli->DescripcionMun }}</td>
                <td>{{ $cli->Fecha }}</td>
                <td>{{ $cli->Email }}</td>
                <td>{{ $cli->Telefono }}</td>
                <td>{{ $cli->Saldo }}</td>
                <td>{{ $cli->Categoria }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cli->KeyCliente) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('clientes.destroy', $cli->KeyCliente) }}" onclick="return confirm('Seguro que deseea eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">

    </div>

@endsection









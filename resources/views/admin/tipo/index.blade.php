@extends('template.main')

@section('title', 'Registro de Tipo de Cliente')

@section('content')
    <a href="{{ route('tipocliente.create') }}" class="btn btn-info">Registrar Tipo de Cliente</a><hr>
    <!-- BUSCADOR DE COBERTURAS -->
    {!! Form::open(['route' => 'tipocliente.index', 'method' => 'GET', 'class' => 'navbar-form pull-right'])  !!}
        <div class="input-group">
            {!! Form::text('TipoCliente', null, ['class' => 'form-control', 'placeholder' => 'Buscar Tipo de Cliente..', 'aria-describedy' => 'search']) !!}
            <span class="input-group-addon" id="search"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <!-- FIN DEL BUSCADOR -->
    <table class="table table-responsive">
        <thead>
        <th>KeyTipo</th>
        <th>Tipo de Cliente</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($tipos as $tipo)
            <tr>
                <td>{{ $tipo->KeyTipo }}</td>
                <td>{{ $tipo->TipoCliente }}</td>

                <td>
                    <a href="{{ route('tipocliente.edit', $tipo->KeyTipo) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('tipocliente.destroy', $tipo->KeyTipo) }}" onclick="return confirm('Seguro que deseea eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $tipos->render() !!}
    </div>

@endsection









@extends('template.main')

@section('title', 'Registrar Departamento')

@section('content')
    <a href="{{ route('departamentos.create') }}" class="btn btn-info">Registrar Departamento</a><hr>
    <!-- BUSCADOR DE COBERTURAS -->
    {!! Form::open(['route' => 'departamentos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right'])  !!}
        <div class="input-group">
            {!! Form::text('DescripcionDep', null, ['class' => 'form-control', 'placeholder' => 'Buscar Departamento..', 'aria-describedy' => 'search']) !!}
            <span class="input-group-addon" id="search"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <!-- FIN DEL BUSCADOR -->
    <table class="table table-responsive">
        <thead>
        <th>KeyDep</th>
        <th>Departamento</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($depas as $depa)
            <tr>
                <td>{{ $depa->KeyDepartamento }}</td>
                <td>{{ $depa->DescripcionDep }}</td>

                <td>
                    <a href="{{ route('departamentos.edit', $depa->KeyDepartamento) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('departamentos.destroy', $depa->KeyDepartamento) }}" onclick="return confirm('Seguro que deseea eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $depas->render() !!}
    </div>

@endsection









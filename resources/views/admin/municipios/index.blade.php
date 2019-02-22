@extends('template.main')

@section('title', 'Registrar Municipio')

@section('content')
    <a href="{{ route('municipios.create') }}" class="btn btn-info">Registrar Municipio</a><hr>
    <!-- BUSCADOR DE COBERTURAS -->
    {!! Form::open(['route' => 'municipios.index', 'method' => 'GET', 'class' => 'navbar-form pull-right'])  !!}
        <div class="input-group">
            {!! Form::text('DescripcionDep', null, ['class' => 'form-control', 'placeholder' => 'Buscar Municipio..', 'aria-describedy' => 'search']) !!}
            <span class="input-group-addon" id="search"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <!-- FIN DEL BUSCADOR -->
    <table class="table table-responsive">
        <thead>
        <th>KeyMunicipio</th>
        <th>Departamento</th>
        <th>Municipio</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($muni as $mun)
            <tr>
                <td>{{ $mun->KeyMunicipio }}</td>
                <td>{{ $mun->KeyDepartamento->DescripcionDep}}</td>
                <td>{{ $mun->DescripcionMun }}</td>
                <td>
                    <a href="{{ route('municipios.edit', $mun->KeyMunicipio) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                    <a href="{{ route('municipios.destroy', $mun->KeyMunicipio) }}" onclick="return confirm('Seguro que deseea eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {!! $muni->render() !!}
    </div>

@endsection









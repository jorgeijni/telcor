@extends('template.main')

@section('title', 'Editar Municipio')

@section('content')
    {!! Form::model($muni, array('route' => array('municipios.update', $muni->KeyMunicipios), 'method' => 'PUT')) !!}
        <div class="form-group">
            {!! Form::label('KeyDepartamento', 'Departamento') !!}
            {!! Form::select('KeyDepartamento', $depa, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Departamento', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion', 'Municipios') !!}
            {!! Form::text('descripcion', $muni->DescripcionMun, ['class' => 'form-control', 'placeholder' => 'Municipios', 'required', 'maxlength' => 150]) !!}
        </div>

        <div class="form-group">
            {!! form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('municipios.index') }}" class="btn btn-danger">Cancelar</a><hr>
        </div>
    {!! Form::close() !!}
@endsection
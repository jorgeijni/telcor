@extends('template.main')

@section('title', 'Crear un nuevo Municipios')

@section('content')
    {!! Form::open(['route' => 'municipios.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('KeyDepartamento', 'Departamento') !!}
        {!! Form::select('KeyDepartamento', $depa, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Departamento', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion', 'Municipios') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Municipios', 'required', 'maxlength' => 150]) !!}
    </div>

    <div class="form-group">
        {!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('municipios.index') }}" class="btn btn-danger">Cancelar</a><hr>
    </div>

    {!! Form::close() !!}
@endsection
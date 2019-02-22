@extends('template.main')

@section('title', 'Crear un nuevo Tipo de Cliente')

@section('content')
    {!! Form::open(['route' => 'departamentos.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('descripcion', 'Departamento') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Departamento', 'required', 'maxlength' => 150]) !!}
    </div>

    <div class="form-group">
        {!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('departamentos.index') }}" class="btn btn-danger">Cancelar</a><hr>
    </div>

    {!! Form::close() !!}
@endsection
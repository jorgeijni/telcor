@extends('template.main')

@section('title', 'Crear un nuevo Tipo de Cliente')

@section('content')
    {!! Form::open(['route' => 'tipocliente.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('tipocliente', 'Tipo de Cliente') !!}
        {!! Form::text('tipocliente', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Tipo del Cliente', 'required', 'maxlength' => 1]) !!}
    </div>

    <div class="form-group">
        {!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('tipocliente.index') }}" class="btn btn-danger">Cancelar</a><hr>
    </div>

    {!! Form::close() !!}
@endsection
@extends('template.main')

@section('title', 'Editar Tipo de Cliente')

@section('content')
    {!! Form::model($tipo, array('route' => array('tipocliente.update', $tipo->KeyTipo), 'method' => 'PUT')) !!}
    <div class="form-group">
        {!! Form::label('tipocliente', 'Tipo de Cliente') !!}
        {!! Form::text('tipocliente', $tipo->TipoCliente, ['class' => 'form-control', 'placeholder' => 'Tipo de Cliente', 'required', 'maxlength' => 1]) !!}
    </div>

    <div class="form-group">
        {!! form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('tipocliente.index') }}" class="btn btn-danger">Cancelar</a><hr>
    </div>
    {!! Form::close() !!}
@endsection
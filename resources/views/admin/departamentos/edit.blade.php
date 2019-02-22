@extends('template.main')

@section('title', 'Editar Tipo de Cliente')

@section('content')
    {!! Form::model($depa, array('route' => array('departamentos.update', $depa->KeyDepartamento), 'method' => 'PUT')) !!}
    <div class="form-group">
        {!! Form::label('descripcion', 'Departamento') !!}
        {!! Form::text('descripcion', $depa->DescripcionDep, ['class' => 'form-control', 'placeholder' => 'Departamento', 'required', 'maxlength' => 150]) !!}
    </div>

    <div class="form-group">
        {!! form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('departamentos.index') }}" class="btn btn-danger">Cancelar</a><hr>
    </div>
    {!! Form::close() !!}
@endsection
@extends('template.main')

@section('title', 'Crear un nuevo  Cliente')

@section('content')
    {!! Form::open(['route' => 'clientes.store', 'method' => 'POST']) !!}
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Nombre', 'Nombre') !!}
                {!! Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Nombre del Cliente', 'required', 'maxlength' => 150]) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('KeyTipo', 'Tipo de Cliente') !!}
                {!! Form::select('KeyTipo', $tipo, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Tipo de Cliente', 'required']) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Direccion', 'Direccion') !!}
                {!! Form::text('Direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingresar el Nombre del Cliente', 'required', 'maxlength' => 150]) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('KeyDepartamento', 'Departamento') !!}
                {!! Form::select('KeyDepartamento', $depa, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Departamento', 'required']) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('KeyMunicipio', 'Municipio') !!}
                {!! Form::select('KeyMunicipio', $mun, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Departamento', 'required']) !!}
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Fecha', 'Fecha') !!}
                {!! Form::date('Fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'max' => \Carbon\Carbon::now()]); !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Email', 'Email') !!}
                {!! Form::email('Email', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Correo Electronico', 'required', 'maxlength' => 150]) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Telefono', 'Telefono') !!}
                {!! Form::text('Telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Telefono', 'maxlength' => 12]) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Saldo', 'Saldo') !!}
                {!! Form::number('Saldo', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Saldo', 'required', 'maxlength' => 12]) !!}
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                {!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a><hr>
            </div>
        </div>

    {!! Form::close() !!}
@endsection
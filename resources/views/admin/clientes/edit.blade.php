@extends('template.main')

@section('title', 'Editar Clientes')

@section('content')
    {!! Form::model($cli, array('route' => array('clientes.update', $cli->KeyCliente), 'method' => 'PUT')) !!}

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Nombre', 'Nombre') !!}
                {!! Form::text('Nombre', $cli->Nombre, ['class' => 'form-control', 'placeholder' => 'Ingresar el Nombre del Cliente', 'required', 'maxlength' => 150]) !!}
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
                {!! Form::text('Direccion', $cli->Direccion, ['class' => 'form-control', 'placeholder' => 'Ingresar el Nombre del Cliente', 'required', 'maxlength' => 150]) !!}
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
                {!! Form::date('Fecha', $cli->Fecha, ['class' => 'form-control', 'max' => \Carbon\Carbon::now()]); !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Email', 'Email') !!}
                {!! Form::email('Email', $cli->Email, ['class' => 'form-control', 'placeholder' => 'Ingresar Correo Electronico', 'required', 'maxlength' => 150]) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Telefono', 'Telefono') !!}
                {!! Form::text('Telefono', $cli->Telefono, ['class' => 'form-control', 'placeholder' => 'Ingresar Telefono', 'required', 'maxlength' => 12]) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Saldo', 'Saldo') !!}
                {!! Form::number('Saldo', $cli->Saldo, ['class' => 'form-control', 'placeholder' => 'Ingresar Saldo']) !!}
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::label('Categoria', 'Categoria') !!}
                {!! Form::text('Categoria', $cli->Categoria, ['class' => 'form-control', 'placeholder' => 'Ingresar Categoria']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a><hr>
        </div>
    {!! Form::close() !!}
@endsection
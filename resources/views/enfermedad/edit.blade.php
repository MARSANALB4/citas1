@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar enfermedad</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($enfermedad, [ 'route' => ['enfermedad.update',$enfermedad->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre_enfermedad', 'Nombre de la enfermedad') !!}
                            {!! Form::text('nombre_enfermedad',$enfermedad->nombre_enfermedad,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('especialidad_id', 'Especialidad medico') !!}
                            <br>
                            {!! Form::select('especialidad_id', $especialidades, $enfermedad->especialidad_id, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

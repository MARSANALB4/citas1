@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enfermedades</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'enfermedad.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear enfermedad', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre Enfermedad</th>
                                <th>Nombre Especialidad</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($enfermedad as $enfer)


                                <tr>
                                    <td>{{ $enfer->nombre_enfermedad }}</td>
                                    <td>{{ $enfer->especialidad->name }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['enfermedad.edit',$enfer->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['enfermedad.destroy',$enfer->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
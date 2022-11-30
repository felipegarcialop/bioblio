@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Visualizar Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Libro:</strong>
                            {{ $libro->nom_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $libro->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Año de Publicación:</strong>
                            {{ $libro->anio_pub }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial :</strong>
                            {{ $libro->editorial_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificacion :</strong>
                            {{ $libro->clasificacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

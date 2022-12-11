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
                            <span class="card-title">Show Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom Libro:</strong>
                            {{ $libro->nom_libro }}
                        </div>
                        <div class="form-group">
                            <strong>Anio Pub:</strong>
                            {{ $libro->anio_pub }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial Id:</strong>
                            {{ $libro->editorial_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificaciones Id:</strong>
                            {{ $libro->clasificaciones_id }}
                        </div>
                        <div class="form-group">
                            <strong>Escritores Id:</strong>
                            {{ $libro->escritores_id }}
                        </div>
                        <div class="form-group">
                            <strong>Copias:</strong>
                            {{ $libro->Copias }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

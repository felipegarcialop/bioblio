@extends('layouts.app')

@section('template_title')
    {{ $dclasificacione->name ?? 'Show Dclasificacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dclasificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dclasificaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libros Id:</strong>
                            {{ $dclasificacione->libros_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificaciones Id:</strong>
                            {{ $dclasificacione->clasificaciones_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

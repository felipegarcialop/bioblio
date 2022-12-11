@extends('layouts.app')

@section('template_title')
    {{ $estante->name ?? 'Show Estante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $estante->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $estante->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pres:</strong>
                            {{ $estante->fecha_pres }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Dev:</strong>
                            {{ $estante->fecha_dev }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

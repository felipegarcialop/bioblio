@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? 'Show Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $persona->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Ap:</strong>
                            {{ $persona->ap }}
                        </div>
                        <div class="form-group">
                            <strong>Am:</strong>
                            {{ $persona->am }}
                        </div>
                        <div class="form-group">
                            <strong>Tpersonas Id:</strong>
                            {{ $persona->tpersonas_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

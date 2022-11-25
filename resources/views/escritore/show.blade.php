@extends('layouts.app')

@section('template_title')
    {{ $escritore->name ?? 'Show Escritore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Escritore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('escritores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $escritore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ap:</strong>
                            {{ $escritore->ap }}
                        </div>
                        <div class="form-group">
                            <strong>Am:</strong>
                            {{ $escritore->am }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

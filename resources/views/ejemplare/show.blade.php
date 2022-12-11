@extends('layouts.app')

@section('template_title')
    {{ $ejemplare->name ?? 'Show Ejemplare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ejemplare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ejemplares.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $ejemplare->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numjemplares:</strong>
                            {{ $ejemplare->numjemplares }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

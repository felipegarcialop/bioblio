@extends('layouts.app')

@section('template_title')
    {{ $dlibro->name ?? 'Show Dlibro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dlibro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dlibros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $dlibro->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Escritores Id:</strong>
                            {{ $dlibro->escritores_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

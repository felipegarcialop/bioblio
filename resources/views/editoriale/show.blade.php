@extends('layouts.app')

@section('template_title')
    {{ $editoriale->name ?? 'Show Editoriale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Editoriale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('editoriales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom Editorial:</strong>
                            {{ $editoriale->nom_editorial }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

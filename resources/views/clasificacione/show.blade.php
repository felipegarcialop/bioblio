@extends('layouts.app')

@section('template_title')
    {{ $clasificacione->name ?? 'Show Clasificacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Visualizar clasificaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clasificaciones.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong> Clasificacion:</strong>
                            {{ $clasificacione->desc_clasificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

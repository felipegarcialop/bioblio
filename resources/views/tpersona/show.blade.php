@extends('layouts.app')

@section('template_title')
    {{ $tpersona->name ?? 'Show Tpersona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tpersona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tpersonas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Desc Tipo:</strong>
                            {{ $tpersona->desc_tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

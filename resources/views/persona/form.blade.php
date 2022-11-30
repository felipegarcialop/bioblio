<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom', $persona->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('ap', $persona->ap, ['class' => 'form-control' . ($errors->has('ap') ? ' is-invalid' : ''), 'placeholder' => 'Ap']) }}
            {!! $errors->first('ap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('am', $persona->am, ['class' => 'form-control' . ($errors->has('am') ? ' is-invalid' : ''), 'placeholder' => 'Am']) }}
            {!! $errors->first('am', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de persona') }}
            {{ Form::select('tpersonas_id',$tpersonas ,$persona->tpersonas_id, ['class' => 'form-control' . ($errors->has('tpersonas_id') ? ' is-invalid' : ''), 'placeholder' => 'Tpersonas Id']) }}
            {!! $errors->first('tpersonas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
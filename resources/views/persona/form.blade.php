<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $persona->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ap') }}
            {{ Form::text('ap', $persona->ap, ['class' => 'form-control' . ($errors->has('ap') ? ' is-invalid' : ''), 'placeholder' => 'Ap']) }}
            {!! $errors->first('ap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('am') }}
            {{ Form::text('am', $persona->am, ['class' => 'form-control' . ($errors->has('am') ? ' is-invalid' : ''), 'placeholder' => 'Am']) }}
            {!! $errors->first('am', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tpersonas_id') }}
            {{ Form::select('tpersonas_id',$tpersonas ,$persona->tpersonas_id, ['class' => 'form-control' . ($errors->has('tpersonas_id') ? ' is-invalid' : ''), 'placeholder' => 'Tpersonas Id']) }}
            {!! $errors->first('tpersonas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
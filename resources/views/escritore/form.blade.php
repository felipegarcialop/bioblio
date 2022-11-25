<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $escritore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ap') }}
            {{ Form::text('ap', $escritore->ap, ['class' => 'form-control' . ($errors->has('ap') ? ' is-invalid' : ''), 'placeholder' => 'Ap']) }}
            {!! $errors->first('ap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('am') }}
            {{ Form::text('am', $escritore->am, ['class' => 'form-control' . ($errors->has('am') ? ' is-invalid' : ''), 'placeholder' => 'Am']) }}
            {!! $errors->first('am', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
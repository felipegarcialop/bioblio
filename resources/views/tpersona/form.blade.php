<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('desc_tipo') }}
            {{ Form::text('desc_tipo', $tpersona->desc_tipo, ['class' => 'form-control' . ($errors->has('desc_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Desc Tipo']) }}
            {!! $errors->first('desc_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
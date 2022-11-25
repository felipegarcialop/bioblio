<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('desc_clasificacion') }}
            {{ Form::text('desc_clasificacion', $clasificacione->desc_clasificacion, ['class' => 'form-control' . ($errors->has('desc_clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Desc Clasificacion']) }}
            {!! $errors->first('desc_clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
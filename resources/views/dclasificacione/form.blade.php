<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('libros_id') }}
            {{ Form::select('libros_id', $libros,$dclasificacione->libros_id, ['class' => 'form-control' . ($errors->has('libros_id') ? ' is-invalid' : ''), 'placeholder' => 'Libros Id']) }}
            {!! $errors->first('libros_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clasificaciones_id') }}
            {{ Form::select('clasificaciones_id', $clasificaciones,$dclasificacione->clasificaciones_id, ['class' => 'form-control' . ($errors->has('clasificaciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Clasificaciones Id']) }}
            {!! $errors->first('clasificaciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
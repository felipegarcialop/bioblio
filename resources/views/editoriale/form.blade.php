<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre de la editorial') }}
            {{ Form::text('nom_editorial', $editoriale->nom_editorial, ['class' => 'form-control' . ($errors->has('nom_editorial') ? ' is-invalid' : ''), 'placeholder' => 'Nom Editorial']) }}
            {!! $errors->first('nom_editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
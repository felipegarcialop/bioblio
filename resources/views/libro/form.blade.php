<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom_libro') }}
            {{ Form::text('nom_libro', $libro->nom_libro, ['class' => 'form-control' . ($errors->has('nom_libro') ? ' is-invalid' : ''), 'placeholder' => 'Nom Libro']) }}
            {!! $errors->first('nom_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio_pub') }}
            {{ Form::text('anio_pub', $libro->anio_pub, ['class' => 'form-control' . ($errors->has('anio_pub') ? ' is-invalid' : ''), 'placeholder' => 'Anio Pub']) }}
            {!! $errors->first('anio_pub', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial_id') }}
            {{ Form::select('editorial_id',$editoriales ,$libro->editorial_id, ['class' => 'form-control' . ($errors->has('editorial_id') ? ' is-invalid' : ''), 'placeholder' => 'Editorial Id']) }}
            {!! $errors->first('editorial_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clasificaciones_id') }}
            {{ Form::select('clasificaciones_id',$clasificaciones ,$libro->clasificaciones_id, ['class' => 'form-control' . ($errors->has('clasificaciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Clasificaciones Id']) }}
            {!! $errors->first('clasificaciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('escritores_id') }}
            {{ Form::select('escritores_id', $escritores,$libro->escritores_id, ['class' => 'form-control' . ($errors->has('escritores_id') ? ' is-invalid' : ''), 'placeholder' => 'Escritores Id']) }}
            {!! $errors->first('escritores_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Copias') }}
            {{ Form::text('Copias', $libro->Copias, ['class' => 'form-control' . ($errors->has('Copias') ? ' is-invalid' : ''), 'placeholder' => 'Copias']) }}
            {!! $errors->first('Copias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
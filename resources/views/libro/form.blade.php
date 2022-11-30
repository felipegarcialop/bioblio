<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre del libro') }}
            {{ Form::text('nom_libro', $libro->nom_libro, ['class' => 'form-control' . ($errors->has('nom_libro') ? ' is-invalid' : ''), 'placeholder' => 'Nom Libro']) }}
            {!! $errors->first('nom_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('código') }}
            {{ Form::text('codigo', $libro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año de publicación') }}
            {{ Form::date('anio_pub', $libro->anio_pub, ['class' => 'form-control' . ($errors->has('anio_pub') ? ' is-invalid' : ''), 'placeholder' => 'Anio Pub']) }}
            {!! $errors->first('anio_pub', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial ') }}
            {{ Form::select('editorial_id',$editoriales, $libro->editorial_id, ['class' => 'form-control' . ($errors->has('editorial_id') ? ' is-invalid' : ''), 'placeholder' => 'Editorial Id']) }}
            {!! $errors->first('editorial_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
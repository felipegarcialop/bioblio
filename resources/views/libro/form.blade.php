<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom_libro') }}
            {{ Form::text('nom_libro', $libro->nom_libro, ['class' => 'form-control' . ($errors->has('nom_libro') ? ' is-invalid' : ''), 'placeholder' => 'Nom Libro']) }}
            {!! $errors->first('nom_libro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $libro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio_pub') }}
            {{ Form::text('anio_pub', $libro->anio_pub, ['class' => 'form-control' . ($errors->has('anio_pub') ? ' is-invalid' : ''), 'placeholder' => 'Anio Pub']) }}
            {!! $errors->first('anio_pub', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial_id') }}
            {{ Form::select('editorial_id',$editoriales, $libro->editorial_id, ['class' => 'form-control' . ($errors->has('editorial_id') ? ' is-invalid' : ''), 'placeholder' => 'Editorial Id']) }}
            {!! $errors->first('editorial_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
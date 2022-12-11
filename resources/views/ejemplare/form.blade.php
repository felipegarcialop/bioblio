<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('libro_id') }}
            {{ Form::select('libro_id', $libros,$ejemplare->libro_id, ['class' => 'form-control' . ($errors->has('libro_id') ? ' is-invalid' : ''), 'placeholder' => 'Libro Id']) }}
            {!! $errors->first('libro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numjemplares') }}
            {{ Form::text('numjemplares', $ejemplare->numjemplares, ['class' => 'form-control' . ($errors->has('numjemplares') ? ' is-invalid' : ''), 'placeholder' => 'Numjemplares']) }}
            {!! $errors->first('numjemplares', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
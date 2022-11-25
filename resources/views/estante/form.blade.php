<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('persona_id') }}
            {{ Form::select('persona_id',$personas ,$estante->persona_id, ['class' => 'form-control' . ($errors->has('persona_id') ? ' is-invalid' : ''), 'placeholder' => 'Persona Id']) }}
            {!! $errors->first('persona_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('libro_id') }}
            {{ Form::select('libro_id',$libros ,$estante->libro_id, ['class' => 'form-control' . ($errors->has('libro_id') ? ' is-invalid' : ''), 'placeholder' => 'Libro Id']) }}
            {!! $errors->first('libro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_pres') }}
            {{ Form::date('fecha_pres', $estante->fecha_pres, ['class' => 'form-control' . ($errors->has('fecha_pres') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pres']) }}
            {!! $errors->first('fecha_pres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_dev') }}
            {{ Form::date('fecha_dev', $estante->fecha_dev, ['class' => 'form-control' . ($errors->has('fecha_dev') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Dev']) }}
            {!! $errors->first('fecha_dev', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
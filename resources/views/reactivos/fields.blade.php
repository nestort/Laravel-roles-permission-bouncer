<!-- Pregunta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pregunta', 'Pregunta:') !!}
    {!! Form::text('pregunta', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado_inicial', 'Grado Inicial:') !!}
    {!! Form::number('grado_inicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado_final', 'Grado Final:') !!}
    {!! Form::number('grado_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('reactivos.index') }}" class="btn btn-secondary">Cancel</a>
</div>

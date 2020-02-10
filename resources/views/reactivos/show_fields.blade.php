<!-- Pregunta Field -->
<div class="form-group">
    {!! Form::label('pregunta', 'Pregunta:') !!}
    <p>{{ $reactivo->pregunta }}</p>
</div>

<!-- Grado Inicial Field -->
<div class="form-group">
    {!! Form::label('grado_inicial', 'Grado Inicial:') !!}
    <p>{{ $reactivo->grado_inicial }}</p>
</div>

<!-- Grado Final Field -->
<div class="form-group">
    {!! Form::label('grado_final', 'Grado Final:') !!}
    <p>{{ $reactivo->grado_final }}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{{ $reactivo->tipo }}</p>
</div>


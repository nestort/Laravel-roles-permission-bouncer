<div class="table-responsive-sm">
    <table class="table table-striped" id="reactivos-table">
        <thead>
            <th>Pregunta</th>
        <th>Grado Inicial</th>
        <th>Grado Final</th>
        <th>Tipo</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($reactivos as $reactivo)
            <tr>
                <td>{{ $reactivo->pregunta }}</td>
            <td>{{ $reactivo->grado_inicial }}</td>
            <td>{{ $reactivo->grado_final }}</td>
            <td>{{ $reactivo->tipo }}</td>
                <td>
                    {!! Form::open(['route' => ['reactivos.destroy', $reactivo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reactivos.show', [$reactivo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('reactivos.edit', [$reactivo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
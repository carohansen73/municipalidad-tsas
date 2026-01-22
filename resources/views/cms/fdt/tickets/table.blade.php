<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
        <tr>
            <th>Edición</th>
            <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tickets as $edicion)
            <tr>
                <td>{{ $edicion->edicion_anio }}</td>
                <td>
                   <form action="{{ route('tickets.activar', $edicion) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="custom-control custom-switch">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                id="activar-{{ $edicion->id }}"
                                onchange="this.form.submit()"
                                {{ $edicion->activa ? 'checked' : '' }}
                            >
                            <label class="custom-control-label"
                                   for="activar-{{ $edicion->id }}">
                            </label>
                        </div>
                    </form>
                </td>
                <td width="120">
                    {{-- {!! Form::open(['route' => ['tickets.destroy', $edicion->id], 'method' => 'delete']) !!} --}}
                    <div class='btn-group'>
                        <a href="{{ route('tickets.edit', [$edicion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {{-- {!! Form::close() !!} --}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

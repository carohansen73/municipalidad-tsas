@extends('cms.layouts.app')

@section('content')
<div class="container">
    <h3>Nuevo Permiso</h3>

    <form method="POST" action="{{ route('permisos.store') }}">
        @csrf

        <div class="form-group">
            <label>Nombre del permiso</label>
            <input type="text"
                   name="name"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="ej: sorteo.index"
                value="{{ old('name') }}"
                   required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Descripción --}}
        <div class="form-group mt-3">
            <label>Descripción</label>
            <input type="text"
                name="descripcion"
                class="form-control @error('descripcion') is-invalid @enderror"
                value="{{ old('descripcion') }}"
                required>

            @error('descripcion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group mt-3">
            <label>Asignar a roles</label>

            @foreach($roles as $rol)
                <div class="form-check">
                    <input class="form-check-input"
                           type="checkbox"
                           name="roles[]"
                           value="{{ $rol->id }}"
                           {{ in_array($rol->id, old('roles', [])) ? 'checked' : '' }}>

                    <label class="form-check-label">
                        {{ $rol->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button class="btn btn-primary mt-3">
            Guardar Permiso
        </button>
    </form>
</div>
@endsection

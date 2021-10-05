<?php 
    /** @var \Illuminate\Support\ViewErrorBag $errors */ 
    /** @var \App\Models\Character $character */
?>
@extends('layouts.main')
@section('title', 'Editar el agente: ' . $character->name)

@section('main')
<div class="form-view d-flex justify-content-center align-items-center px-3">
    <div class="card my-4">
        <div class="card-body">
            <form action="{{ route('characters.edit', ['id' => $character->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ingresá un nombre" value="{{ old('name', $character->name) }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Rol</label>
                    <select class="form-select" id="role" aria-label="Seleccioná un rol" name="role" value="{{ old('role', $character->role) }}" placeholder="Seleccioná un rol">
                        <option>Duelista</option>
                        <option>Iniciador</option>
                        <option>Centinela</option>
                        <option>Controlador</option>
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="biography" class="form-label">Biografía</label>
                    <textarea class="form-control" name="biography" id="biography" rows="3">{{ old('biography', $character->biography) }}</textarea>
                    @error('biography')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Agregar imagen (JPG, WEBP o PNG)</label>
                    <input class="form-control" type="file" name="image" id="image" accept="image/*">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="q-title" class="form-label">Título habilidad Q</label>
                    <input type="text" name="q_title" class="form-control" id="q-title" value="{{ old('q_title', $character->q_title) }}">
                    @error('q_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="q-text" class="form-label">Descripción habilidad Q</label>
                    <textarea class="form-control" name="q_text" id="q-text" rows="3">{{ old('q_text', $character->q_text) }}</textarea>
                    @error('q_text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="e-title" class="form-label">Título habilidad E</label>
                    <input type="text" name="e_title" class="form-control" id="e-title" value="{{ old('e_title', $character->e_title) }}">
                    @error('e_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="e-text" class="form-label">Descripción habilidad E</label>
                    <textarea class="form-control" name="e_text" id="e-text" rows="3"> {{ old('e_text', $character->e_text) }} </textarea>
                    @error('e_text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="c-title" class="form-label">Título habilidad C</label>
                    <input type="text" name="c_title" class="form-control" id="c-title" value="{{ old('c_title', $character->c_title) }}">
                    @error('c_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="c-text" class="form-label">Descripción habilidad C</label>
                    <textarea class="form-control" name="c_text" id="c-text" rows="3">{{ old('c_text', $character->c_text) }}</textarea>
                    @error('c_text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="x-title" class="form-label">Título habilidad X</label>
                    <input type="text" name="x_title" class="form-control" id="x-title" value="{{ old('x_title', $character->x_title) }}">
                    @error('x_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="x-text" class="form-label">Descripción habilidad X</label>
                    <textarea class="form-control" name="x_text" id="x-text" rows="3">{{ old('x_text', $character->x_text) }}</textarea>
                    @error('x_text')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn text-white red-bg w-100">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
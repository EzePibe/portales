<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */ 
    /** @var \App\Models\News $news */
?>

@extends('layouts.main')
@section('title', 'Editar noticia: ' . $news->title)

@section('main')
<div class="form-view d-flex justify-content-center align-items-center px-3">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('news.edit', ['id' => $news->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" 
                        name="title" 
                        class="form-control" 
                        id="title" 
                        placeholder="Ingresá un título"
                        value="{{ old('title', $news->title) }}"
                    >
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Texto</label>
                    <textarea class="form-control" name="text" id="text" rows="3">
                        {{ old('text', $news->text) }}
                    </textarea>
                    @error('text')
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

                <button type="submit" class="btn text-white red-bg w-100">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
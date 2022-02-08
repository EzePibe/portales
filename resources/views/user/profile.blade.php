<?php 
    /** @var \Illuminate\Support\ViewErrorBag $errors */ 
?>
@extends('layouts.main')
@section('title', 'Mi Perfíl - ' . Auth::user()->name)

@section('main')
<div class="form-view d-flex justify-content-center align-items-center px-3">
    <div class="card my-4">
        <div class="card-body">
            <h2 class="text-center">Mi Perfíl</h2>
            <form action="{{ route('user.edit') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ingresá un nombre" value="{{ Auth::user()->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Ingresá un email" value="{{ Auth::user()->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn text-white red-bg w-100">Guardar</button>
            </form>

            <p class="text-center mb-0 mt-2">
                <a href="{{ route('user.formPassword')}}" class="red-text">Cambiar contraseña</a>
            </p>
        </div>
    </div>
</div>
@endsection
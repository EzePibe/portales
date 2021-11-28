<?php /** @var \Illuminate\Support\ViewErrorBag $errors */ ?>


@extends('layouts.main')
@section('title', 'Iniciar Sesión')

@section('main')
<div class="form-view d-flex justify-content-center align-items-center px-3">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('auth.register') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input 
                        id="name" 
                        type="text" 
                        name="name" 
                        class="form-control" 
                        value="{{ old('name') }}"
                    >
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    
                    @if(Session::has('message.error'))
                        <div class="text-danger">{{ Session::get('message.error') }}</div>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="name@example.com"
                        value="{{ old('email') }}"
                    >
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    
                    @if(Session::has('message.error'))
                        <div class="text-danger">{{ Session::get('message.error') }}</div>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        class="form-control"
                    >
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn text-white red-bg w-100">Registrarse</button>

                <p class="text-center mb-1 mt-3">
                    ¿Ya tenes cuenta?
                    <a href="{{ route('auth.formLogin') }}" class="red-text fw-bolder">Iniciá sesión</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
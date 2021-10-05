<?php /** @var \Illuminate\Support\ViewErrorBag $errors */ ?>


@extends('layouts.main')
@section('title', 'Iniciar Sesión')

@section('main')
<div class="form-view d-flex justify-content-center align-items-center px-3">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('auth.login') }}" method="post">
                @csrf

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
                <button type="submit" class="btn text-white red-bg w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
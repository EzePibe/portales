<?php 
    /** @var \Illuminate\Support\ViewErrorBag $errors */ 
?>
@extends('layouts.main')
@section('title', 'Editar Contraseña - ' . Auth::user()->name)

@section('main')
<div class="form-view d-flex justify-content-center align-items-center px-3">
    <div class="card my-4">
        <div class="card-body">
            <h2 class="text-center">Editar Contraseña</h2>
            <form action="{{ route('user.editPassword') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="oldpassword" class="form-label">Contraseña actual</label>
                    <input type="password" name="oldpassword" class="form-control" id="oldpassword" placeholder="Ingresá tu contraseña actual">
                    @if(Session::has('message.error_oldpassword'))
                        <div class="text-danger">{{ Session::get('message.error_oldpassword') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña nueva</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Ingresá la nueva contraseña">
                    @if(Session::has('message.error_password'))
                        <div class="text-danger">{{ Session::get('message.error_password') }}</div>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="passwordconfirm" class="form-label">Confirmar contraseña nueva</label>
                    <input type="password" name="passwordconfirm" class="form-control" id="passwordconfirm" placeholder="Confirmá la nueva contraseña">
                    @if(Session::has('message.error_passwordconfirm'))
                        <div class="text-danger">{{ Session::get('message.error_passwordconfirm') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn text-white red-bg w-100">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
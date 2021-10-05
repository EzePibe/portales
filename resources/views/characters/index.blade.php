<?php /** @var \App\Models\Character[] $characters */ ?>

@extends('layouts.main')
@section('title', 'Noticias')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Agentes</h2>
        @auth
            <a 
                class="h2 red-text"
                href="{{ route('characters.form')}}"
                data-bs-toggle="tooltip" 
                data-bs-placement="left" 
                title="Nuevo Agente"
            >
                +
            </a>
        @endauth
    </div>
        
    <div>
        @foreach($characters as $character)
            <div class="card character-card my-2 mx-auto">
                <a href="{{route('characters.character', ['id' => $character->id])}}">
                    <img 
                        alt="{{ $character->name }}"
                        src="{{ asset('/storage/characters/' . $character->image)}}" 
                    >
                </a>
                <div class="card-body p-2 text-center">
                    <h3 class="card-title tungsten h1 text-uppercase">{{ $character->name }}</h3>
                    @auth
                        <form 
                        method="post"
                        action="{{route('characters.delete', ['id' => $character->id])}}"
                        >
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-link" type="submit">Eliminar</button>
                        </form>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
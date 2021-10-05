<?php /** @var \App\Models\Character[] $characters */ ?>

@extends('layouts.main')
@section('title', 'Noticias')

@section('main')
<div>
    <h2>Agentes</h2>
    @auth
        <a href="{{ route('characters.form')}}">Crear Agente</a>
    @endauth
        
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
@endsection
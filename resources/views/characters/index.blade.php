<?php /** @var \App\Models\Character[] $characters */ ?>

@extends('layouts.main')
@section('title', 'Agentes')

@section('main')
<div class="container characters-page">
    <div class="d-flex justify-content-between align-items-center pt-3">
        <h2 class="font-title tungsten text-uppercase tex-center">Agentes</h2>
        @auth
            <a 
                class="h6 red-text"
                href="{{ route('characters.form')}}"
            >
                <span class="h5">+</span>
                NUEVO AGENTE
            </a>
        @endauth
    </div>
        
    <!-- <div class="d-flex justify-content-center justify-content-lg-between flex-wrap"> -->
    <div class="d-flex justify-content-center justify-content-xl-start flex-wrap container-characters">
        @foreach($characters as $character)
            <div class="card character-card transition-shadow m-4 p-2 pb-0">
                <a href="{{route('characters.character', ['id' => $character->id])}}">
                    <img 
                        alt="{{ $character->name }}"
                        src="{{ asset('/storage/characters/' . $character->image)}}" 
                    >
                </a>
                <div class="card-body p-2 text-center">
                    <h3 class="card-title tungsten h1 text-uppercase">{{ $character->name }}</h3>
                    @auth
                        <a href="{{ route('characters.formEdit', ['id' => $character->id]) }}" class="btn btn-link">Editar</a>
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
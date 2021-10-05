<?php /** @var \App\Models\Character $character */ ?>

@extends('layouts.main')
@section('title', $character->name)

@section('main')
<div class="character-page">
    <section class="img-header">
        <h2 class="tungsten text-uppercase">
            {{ $character->name }}
        </h2>
        <img src="{{ asset('/imgs/agent-background.JPG') }}" alt="Fonto agente Valorant">
        <img 
            class="img-character"
            alt="{{ $character->name }}"
            src="{{ asset('/storage/characters/' . $character->image)}}" 
        >
    </section>

    <section class="container">
        <h3 class="tungsten text-uppercase mb-0">Biografía</h3>
        <p>
            {{ $character->biography }}
        </p>
    </section>
    <section class="container">
        <h3 class="tungsten text-uppercase mb-0">Habilidades</h3>
        <p>
            Rol:
            <span class="tungsten text-uppercase h3">
                {{ $character->role }}
            </span> 
        </p>

        <div class="cards-flex mb-4">

            <div class="card m-2 p-2">
                <div class="card-body text-center">
                    <p class="tungsten text-uppercase letter mb-0">Q</p>
                    <p class="tungsten text-uppercase h1 mb-0">{{ $character->q_title }}</p>
                    <p class="card-text">{{ $character->q_text }}</p>
                </div>
            </div>
            
            <div class="card m-2 p-2">
                <div class="card-body text-center">
                    <p class="tungsten text-uppercase letter mb-0">E</p>
                    <p class="tungsten text-uppercase h1 mb-0">{{ $character->e_title }}</p>
                    <p class="card-text">{{ $character->e_text }}</p>
                </div>
            </div>

            <div class="card m-2 p-2">
                <div class="card-body text-center">
                    <p class="tungsten text-uppercase letter mb-0">C</p>
                    <p class="tungsten text-uppercase h1 mb-0">{{ $character->c_title }}</p>
                    <p class="card-text">{{ $character->c_text }}</p>
                </div>
            </div>

            <div class="card m-2 p-2">
                <div class="card-body text-center">
                    <p class="tungsten text-uppercase letter mb-0">X</p>
                    <p class="tungsten text-uppercase h1 mb-0">{{ $character->x_title }}</p>
                    <p class="card-text">{{ $character->x_text }}</p>
                </div>
            </div>

        </div>

    </section>
</div>
@endsection
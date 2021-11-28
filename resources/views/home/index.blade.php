@extends('layouts.main')
@section('title', 'Inicio')

@section('main')
<div class="home">
    <section class="banner">
        <img src="{{ asset('/imgs/banner.webp') }}" alt="Banner presentación Valorant">
        <div>
            <a href="#download" class="btn btn-play-free red-bg text-white fw-bolder">JUEGA GRATIS</a>
        </div>
    </section>
    <section class="container py-4">
        <h2>SOMOS VALORANT</h2>
        <p class="subtitle">DESAFÍA LOS LÍMITES</p>
        <p class="text-secondary">Combina tu estilo y experiencia en un escenario global y competitivo. Tienes 13 rondas para atacar y defender tu lado con armas precisas y habilidades tácticas. Además, al contar con una sola vida por ronda, tendrás que pensar más rápido que tu oponente si quieres sobrevivir. Enfréntate a enemigos en los modos competitivo y normal, así como en Deathmatch y Spike Rush.</p>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/WATkdofknfw" title="Trailer Valorant" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="black-bg" id="download">
        @auth
            <button 
                class="btn btn-play-free red-bg text-white fw-bolder" 
                data-bs-toggle="modal" 
                data-bs-target="#modalHome"
            >
                DESCARGAR GRATIS
            </button>
        @elseguest
            <a 
                href="{{ route('auth.formLogin') }}"
                class="btn btn-play-free red-bg text-white fw-bolder" 
            >
                DESCARGAR GRATIS
            </a>
        @endguest
        

        <div class="modal fade" id="modalHome" tabindex="-1" aria-labelledby="modalHomeLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn-close mt-2 m-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-0">
                        <p>Aca debería descargarse el juego</p>
                    </div>
                    <div class="modal-footer p-0">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="characters red-bg pt-4 ">
        <div class="container d-lg-flex flex-lg-row-reverse">
            <div>
                <h2>TUS AGENTES</h2>
                <p class="subtitle">LA CREATIVIDAD ES TU MEJOR ARMA</p>
                <p>
                    Más allá de las armas y las balas, podrás elegir a un agente dotado de habilidades versátiles, veloces y letales con las que crearás oportunidades para sobresalir. Ningún agente se jugará igual, ni ningún momento memorable se verá igual.
                </p>
            </div>
            <div class="text-center omen">
                <a href="{{ route('characters.index') }}" class="btn btn-light red-text fw-bolder">
                    VER AGENTES
                </a>
                <img src="{{ asset('/imgs/omen.webp') }}" alt="Personaje 'Omen'">
            </div>
        </div>
        
    </section>
</div>
@endsection
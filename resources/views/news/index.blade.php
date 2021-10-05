<?php /** @var \App\Models\News[] $news */ ?>

@extends('layouts.main')
@section('title', 'Noticias')

@section('main')
<div>
    <div class="container index-news">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h2 class="font-title tungsten text-uppercase tex-center">Noticias</h2>
            @auth
                <a 
                    class="h2 red-text"
                    href="{{ route('news.form')}}"
                    data-bs-toggle="tooltip" 
                    data-bs-placement="left" 
                    title="Nueva Noticia"
                >
                    +
                </a>
            @endauth
        </div>

        <div class="d-flex justify-content-center justify-content-lg-between flex-wrap">
            @foreach($news as $news_item)
                <div class="card m-4 transition-shadow">
                    <a href="{{route('news.news', ['id' => $news_item->id])}}" 
                        class="img-card-news"
                    >
                        @if($news_item->_hasImage())
                            <img
                                class="card-img-top" 
                                alt="{{'Novedades de' . $news_item->title}}"
                                src="{{ asset('/storage/imgs/' . $news_item->image)}}" 
                            >
                        @else
                            <img
                                class="card-img-top" 
                                alt="{{'Novedades de' . $news_item->title}}"
                                src="{{ asset('/imgs/no-image.png')}}" 
                            >
                        @endif
                    </a>
                    <div class="card-body pb-0">
                        <h3 class="card-title tungsten text-uppercase">{{ $news_item->title }}</h3>
                    </div>
                    @auth
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="{{route('news.formEdit', ['id' => $news_item->id])}}" class="btn btn-link">Editar</a>
                            <form 
                                method="post"
                                action="{{route('news.delete', ['id' => $news_item->id])}}"
                            >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link" type="submit">Eliminar</button>
                            </form>
                        </div>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
<?php /** @var \App\Models\News[] $news */ ?>

@extends('layouts.main')
@section('title', 'Noticias')

@section('main')
<div>
    <h1>news</h1>
    @auth
        <a href="{{ route('news.form')}}">Crear Noticia</a>
    @endauth
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        
        @foreach($news as $news_item)
            <tr>
                <td>{{ $news_item->id }}</td>
                <td>
                    <a href="{{route('news.news', ['id' => $news_item->id])}}">
                    <a href="{{ route('news.news', ['id' => $news_item->id]) }}">
                    {{$news_item->title}}
                </a>
                </td>
                <td>{{ $news_item->text }}</td>
                <td>{{ $news_item->date }}</td>
                <td>
                    <form 
                        method="post"
                        action="{{route('news.delete', ['id' => $news_item->id])}}"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
</div>
@endsection
<?php /** @var \App\Models\News[] $news */ ?>

@extends('layouts.main')
@section('title', $news->title)

@section('main')
<div>
    <h1>{{ $news->title }}</h1>
    @if($news->_hasImage())
        <img src="{{ asset('/storage/imgs/' . $news->image)}}" alt="{{'Novedades de' . $news->title}}">
    @else
        <p>gil</p>
    @endif
    <p>{{ $news->title }}</p>
    <p>{{ $news->text }}</p>
    <p>{{ $news->date }}</p>
</div>
@endsection
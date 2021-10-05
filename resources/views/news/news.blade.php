<?php /** @var \App\Models\News[] $news */ ?>

@extends('layouts.main')
@section('title', $news->title)

@section('main')
<div class="container py-3">

<div class="d-flex justify-content-between align-items-center flex-wrap">
    <h2 class="font-title tungsten text-uppercase tex-center mb-1">{{ $news->title }}</h2>
    <p class="text-secondary mb-1">{{ date('d-m-Y', strtotime($news->date)) }}</p>
</div>
    @if($news->_hasImage())
        <div class="mb-4 text-center">
            <img src="{{ asset('/storage/imgs/' . $news->image)}}" alt="{{'Novedades de' . $news->title}}">
        </div>
    @endif

    {!! $news->text !!}
    
</div>
@endsection
<?php /** @var \App\Models\User[] $users */ ?>

@extends('layouts.main')
@section('title', 'Lista de usuarios')

@section('main')
<div class="container characters-page">
@foreach($users as $user)
    <p>{{ $user->name }}</p>
    @if($user->newsletter)
        <p>Suscrito</p>
    @else
        <p>NO ESTA SUSCRIPTO</p>
    @endif
    <hr>
@endforeach

</div>
@endsection
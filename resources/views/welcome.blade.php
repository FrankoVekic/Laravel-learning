@extends('layouts\app')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($games) == 0)

@foreach($games as $game)
    <x-game-card :game="$game"/>
@endforeach

@else 

<p> No Games found </p>

@endunless

</div>
@endsection
@extends('layouts\app')

@section('content')

<h1>{{$heading}}</h1>

@unless(count($games) == 0)

@foreach($games as $game)
<h4>
    <a href="game/{{$game['id']}}">{{$game['title']}}</a>
</h4>
@endforeach

@else 

<p> No Games found </p>

@endunless

@endsection
@extends('layouts\app')

@section('content')
@include('partials._search')    

<h4>
    {{$games['title']}}
</h4>

@endsection
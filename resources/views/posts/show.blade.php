@extends('layouts.app')

@section('title') Show @endsection

@section('content')

<div class="container">
    <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>

    @if($post->user)
        <h1 class="text-gray-400 pt-2">Posted by {{ $post->user->name }} on {{ date('Y-m-d')}}</h1>
    @endif

    <p class="my-6">{{ $post->summary }}</p>

</div>

@endsection
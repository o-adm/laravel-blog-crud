@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

    <section class="text-center py-8">
        <h1 class="text-3xl font-bold mb-6">Welcome to ADM Blog</h1>
        <p class="mb-4">Explore our latest blog posts below:</p>
        <div class="my-6">
            <a href="{{ route('posts.create')}}" class="bg-green-500 transition ease-in-out hover:bg-green-900 py-4 px-6 text-white rounded-md shadow-lg">Create Post</a>
        </div>
    </section>

    {{-- Blog post page --}}
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
         @include('posts.index', ['id' => $post->id, 'title' => $post->title, 'summary' => $post->summary, 'userName' => $post->user ? $post->user->name : 'not found'])
        @endforeach
    </section>


@endsection

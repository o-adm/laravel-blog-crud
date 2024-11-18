@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
@if ($errors->any())
    <div class="bg-red-400 p-4 rounded-md">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <h1 class="text-3xl font-bold text-center">Create New Post</h1>
        <div class="mt-8 bg-slate-300 p-4 rounded-md max-w-2xl mx-auto">
            <div>
                <label for="title">Title :</label>
                <input class="block border-0 py-1.5 pl-7 pr-20 text-gray-900 w-full" type="text" name="title" id="title" />
            </div>
            <div class="mt-8">
                <label for="summary">Description :</label>
                <textarea  name="summary" id="summary" cols="30" rows="3" class="w-full pl-7"></textarea>
            </div>
            <div class="mt-8">
                <label for="posted_by">Posted by :</label>
                <select for="posted_by" name="posted_by" id="posted_by" class="w-full px-6 py-1.5">
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
                </select>
            </div>
            <button class="bg-green-500 hover:bg-green-900 hover:text-white px-6 py-1.5 mt-8 font-medium rounded-md ring-2 ring-green-300">Submit</button>
        </div>
    </form>
@endsection


@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-grar-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>
@if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">

            <a href="/blog/create"
               class="bg-blue-500 uppercase bg-transparent text-gray-100
                text-xs font-extrabold px-5 py-3 rounded-3xl">
                Create a post
            </a>
        </div>
        @endif

@foreach($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/home-office-336377_960_720.jpg" width="700" alt="">
        </div>

        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{$post->title}}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">    {{$post->user->name}}
    Created on {{date('jS M Y', strtotime($post->updated_at) )}}</span>

            </span>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->descriptipn}}
            </p>
            <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100
             text-lg font-extrabold py-4 px-8 rounded-3xl"> Keep Reading</a>
        </div>
    </div>
@endforeach



@endsection

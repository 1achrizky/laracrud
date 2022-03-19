{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
   
    <h1 class="mb-5"> {{ $post->title }} </h1>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> | 
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }} </a> </p>
    {{-- <h5>Author: {{ $post["author"] }} </h5> --}}
    {!! $post->body !!}
    
    <a href="/posts" class="d-block mt-3">Back to Article List</a>
  
@endsection('container')
@extends('layouts.main')

@section('container')
  <h2>Halaman Blog Post</h2>

  @foreach ($posts as $post)
  {{-- @dd($post->user) --}}
    <article class="mb-5 border-bottom pb-3">    
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }} </a></h2>
        <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> | 
          <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> 
          {{ $post->category->name }} </a> </p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
    </article>
  @endforeach
  
@endsection('container')
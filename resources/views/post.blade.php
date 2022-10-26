@extends('layouts.main')

@section('container')
        <Article>
            <h2>{{ $post->title }}</h2>
            <p>By. <a href="#"class='text-decoration-none'>{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}"class='text-decoration-none'>{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </Article>
        <a href="/blog"class='d-block mt-2'>Back</a>
@endsection


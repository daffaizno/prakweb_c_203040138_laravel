@extends('layouts.main')

@section('container')
        <Article>
            <h2>{{ $post->title }}</h2>
            <p>By. Daffaiz No In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </Article>
        <a href="/blog">Back</a>
@endsection


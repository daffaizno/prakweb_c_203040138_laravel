@extends('layouts.main')

@section('container')
        <Article>
            <h2>{{ $post->title }}</h2>
            {!! $post->body !!}
        </Article>
        <a href="/blog">Back</a>
@endsection


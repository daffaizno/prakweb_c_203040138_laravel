@extends('layouts.main')

@section('container')
        <Article>
            <h2>{{ $post["title"] }}</h2>
            <h5>{{ $post["author"] }}</h2>
            <p>{{ $post["body"] }}</p>
        </Article>
        <a href="/blog">Back</a>
@endsection
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <Article>

                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/posts?author={{ $post->author->username }}"class='text-decoration-none'>{{ $post->author->name }}</a> <a href="/posts?category/{{ $post->category->slug }}"class='text-decoration-none'>{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                

            </Article>

            <a href="/posts"class='d-block mt-2'>Back</a>

        </div>
    </div>
</div>

@endsection


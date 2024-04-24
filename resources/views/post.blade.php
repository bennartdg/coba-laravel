@extends('layout.main')

@section('container')
  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <h6>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in
          <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}
          </a>
        </h6>

        <img src="https://source.unsplash.com/1200x400/?{{ $post->category }}" class="card-img-top"
          alt="{{ $post->category }}" class="img-fluid">

        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
      </div>
      <a href="/blog">Back</a>
    </div>
  </div>
@endsection

@extends('layout.main')

@section('container')
  <h1 class="mb-3 text-center">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/blog" method="GET">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search"
            value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="card mb-5">
      <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category }}" class="card-img-top"
        alt="{{ $posts[0]->category }}">
      <div class="card-body text-center">
        <h3 class="card-title">
          <a href="blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
            {{ $posts[0]->title }}
          </a>
        </h3>

        <small class="text-muted">
          By. <a href="/blog?author={{ $posts[0]->user->username }}"
            class="text-decoration-none">{{ $posts[0]->user->name }}</a> in
          <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
            {{ $posts[0]->category->name }}
          </a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>

        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">
          Read more
        </a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-5">
            <div class="card">
              <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                <a href="/blog?category={{ $post->category->slug }}" class="text-light text-decoration-none">
                  {{ $post->category->name }}
                </a>
              </div>
              <img src="https://source.unsplash.com/500x400/?{{ $post->category }}" class="card-img-top"
                alt="{{ $posts[0]->category }}">
              <div class="card-body">
                <h3 class="card-title">
                  <a href="blog/{{ $post->slug }}" class="text-decoration-none text-dark">
                    {{ $post->title }}
                  </a>
                </h3>
                <small class="text-muted">
                  By. <a href="/blog?author={{ $post->user->username }}"
                    class="text-decoration-none">{{ $post->user->name }}</a>
                  {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p>{{ $post->excerpt }}</p>

                <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-primary">
                  Read more
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center fs-4">No post</p>
  @endif

  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
@endsection

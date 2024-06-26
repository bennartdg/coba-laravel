@extends('layout.main')

@section('container')
  <h1 class="mb-5">Post Categories</h1>


  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <a href="/blog?category={{ $category->slug }}">
            <div class="card rounded-0">
              <img src="https://source.unsplash.com/500x400/?{{ $category->name }}" class=""
                alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
                <h5 class="card-title text-center flex-fill p-4 text-light" style="background-color: rgba(0, 0, 0, 0.7)">
                  {{ $category->name }}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection

@extends('layout.main')

@section('container')
  <h1>Dashboard {{ auth()->user()->name }}</h1>
@endsection

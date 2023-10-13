@extends('layout.app')

@section('main-content')
<div class="container mt-4">
  <div class="row g-3">
    @foreach ($movies as $movie)
    <div class="col-3">
      @include('partials._card')
    </div>
    @endforeach
  </div>
</div>
@endsection

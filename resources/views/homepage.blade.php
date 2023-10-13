@extends('layout.app')

@section('main-content')
<div class="container mt-5 mb-5">
  <div class="row g-5">
    @foreach ($movies as $movie)
    <div class="col-3">
      @include('partials._card')
    </div>
    @endforeach
  </div>
</div>
@endsection

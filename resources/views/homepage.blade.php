{{-- extend the app.blade file --}}
@extends('layout.app')

{{-- create a section for main in app.blade  --}}
@section('main-content')
<div class="container mt-5 mb-5">
  <div class="row g-5">
    {{-- cicle for movie list inside the database --}}
    {{--todo note: information come from web.php -> PageController -> Movie.php (modal) (database)--}}
    @foreach ($movies as $movie)
    <div class="col-3">
      {{-- include the partial of a card --}} 
      @include('partials._card')
    </div>
    @endforeach
  </div>
</div>
@endsection

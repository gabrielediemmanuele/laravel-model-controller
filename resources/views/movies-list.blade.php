{{-- extend the app.blade file --}}
@extends('layout.app')
{{-- create a section for main in app.blade  --}}
@section('main-content')
<div class="container mt-5 mb-5">
    <div class="card" style="width: 18rem;">
        <div class="card-header h6 bg-warning text-dark">
            Movies List
          </div>
        <ul class="list-group list-group-flush">
        {{-- cicle for movie list inside the database --}}
        {{--todo note: information come from web.php -> PageController -> Movie.php (modal) (database)--}}
         @foreach ($movies as $movie)
            <li class="list-group-item bg-dark text-light">{{ $movie->title }}</li>
          @endforeach
        </ul>
      </div>
  </div>
</div>
@endsection

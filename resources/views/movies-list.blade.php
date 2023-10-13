@extends('layout.app')

@section('main-content')
<div class="container mt-5 mb-5">
    <div class="card" style="width: 18rem;">
        <div class="card-header h6 bg-warning text-dark">
            Movies List
          </div>
        <ul class="list-group list-group-flush">
         @foreach ($movies as $movie)
            <li class="list-group-item bg-dark text-light">{{ $movie->title }}</li>
          @endforeach
        </ul>
      </div>
  </div>
</div>
@endsection

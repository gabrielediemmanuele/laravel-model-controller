{{-- simple card partial for movies --}}
<div class="card bg-dark text-warning" style="width: 14rem; Height: 18rem;">
    <div class="card-header h6 bg-warning text-dark">
      Titolo: {{ $movie->title }}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item bg-dark text-light">Titolo Originale: {{ $movie->original_title }}</li>
      <li class="list-group-item bg-dark text-light">Nazionalità: {{ $movie->nationality }}</li>
      <li class="list-group-item bg-dark text-light">Data: {{ $movie->date }}</li>
      <li class="list-group-item bg-dark text-light">Voto: {{ $movie->vote }}</li>
    </ul>
  </div>
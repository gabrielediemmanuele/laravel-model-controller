<div class="card" style="width: 14rem; Height: 18rem;">
    <div class="card-header h6">
      Titolo: {{ $movie->title }}
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Titolo Originale: {{ $movie->original_title }}</li>
      <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
      <li class="list-group-item">Data: {{ $movie->date }}</li>
      <li class="list-group-item">Voto: {{ $movie->vote }}</li>
    </ul>
  </div>
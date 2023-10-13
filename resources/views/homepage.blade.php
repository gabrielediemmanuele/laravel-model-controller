<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel-Model-Controller</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <div class="container mt-4">
    <div class="row g-3">
      @foreach ($movies as $movie)
      <div class="col-3">
        <div class="card" style="width: 14rem; Height: 18rem;">
          <div class="card-header">
            <h5>Titolo: {{ $movie->title }}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Titolo Originale: {{ $movie->original_title }}</li>
            <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
            <li class="list-group-item">Data: {{ $movie->date }}</li>
            <li class="list-group-item">Voto: {{ $movie->vote }}</li>
          </ul>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</body>

</html>

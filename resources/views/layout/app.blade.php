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
   {{--*  Connection to partials _navbar default  --}}
  <header>@include('partials._navbar')</header>
   {{--* homepage and movies "stencil" --}}
  <main>@yield('main-content')</main>
  <footer></footer>
</body>

</html>
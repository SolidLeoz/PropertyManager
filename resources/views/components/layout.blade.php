<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- risorse --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>escrowPropertyManagerdemo</title>


  </head>

  <body>

    <x-navbar/>

    <h1>Hello, world!</h1>

    {{$slot}}

  </body>

</html>
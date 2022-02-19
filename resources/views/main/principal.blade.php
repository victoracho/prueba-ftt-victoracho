<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="http://codesmx.com/">
    <meta name="author" content="github.com/nest-7">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Victoracho</title>
    {{-- icons --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- javascript --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  </head>
  <body>
    @include('main.sections.nav')
    <br>
    <br>
    @yield('content')
    @include('main.sections.footer')
    @stack('js')
  </body>
</html>

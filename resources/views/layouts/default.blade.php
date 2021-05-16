<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Styles -->
      <link href="/css/main.css" rel="stylesheet">
      <link href="/css/normalize.css" rel="stylesheet">
    </head>
    <body>
        @yield('content')

      @include('footer.footer')
    </body>
</html>

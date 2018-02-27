<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Network</title>
  </head>
  <body>
    @include('templates.partials.navigation')
    <div class="container">
      @include('templates.partials.alerts')
      @yield('content')
    </div>
  </body>
</html>

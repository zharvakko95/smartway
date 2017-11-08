<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inicio</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>

  @include ('layouts.nav')

  @yield ('content')

  @include ('layouts.footer')

</body>
</html>
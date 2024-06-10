<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <title>Document</title>

  <!-- Includiamo gli assets con la direttiva vite -->
  @vite('resources/js/app.js')
</head>

<body>
  <main>
    @yield('content')
  </main>

</body>

</html>

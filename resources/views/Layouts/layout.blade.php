<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ecommerce</title>
  <link rel="stylesheet" href="{{ url('css/Home.css') }}">
  <link rel="stylesheet" href="{{ url('js/Home.js') }}">
  <link rel="stylesheet" href="{{ url('css/command.css') }}">
  <link rel="stylesheet" href="{{ url('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ url('css/login.css') }}">

  <link rel="stylesheet" href="{{ url('css/register.css') }}">
  <link rel="stylesheet" href="{{ url('css/contact.css') }}">
  <link rel="stylesheet" href="{{ url('css/show.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="assets/js/theme.js"></script>
</head>
<body>
  @include('Layouts.navbar')
    @yield('content')
  @include('Layouts.footer')

</body>
</html>
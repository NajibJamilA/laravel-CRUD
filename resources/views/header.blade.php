<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Laravel Gan</title>

<link rel="stylesheet" href="{{ url('css/bootstrap.css')}}">
<script type="text/javascript" src="{{ url('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ url('js/jquery-3.1.0.js')}}"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Laravel Gan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/create') }}">CREATE</a>
        </li>
      </ul>

    </div>
  </nav>

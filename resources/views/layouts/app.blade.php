<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="{{ route('streams.index') }}">Streams</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('channels.index') }}">Channels</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('settings.edit') }}">Settings</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif
  @yield('content')
</div>
</body>
</html>

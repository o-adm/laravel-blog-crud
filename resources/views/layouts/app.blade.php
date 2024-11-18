<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
  @include('layouts.header')

 <main class="container mx-auto py-8">
    @yield('content')
 </main>

 @include('layouts.footer')
</body>
</html>
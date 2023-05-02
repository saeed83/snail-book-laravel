
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>
    @include('sections.css')
  </head>
  <body>
    {{-- Navigation section --}}
    @include('sections.nav')

    {{-- main content section --}}
    @yield('content')
    
    {{-- bottom body js section --}}
    @include('sections.bottom_js')
  </body>
</html>

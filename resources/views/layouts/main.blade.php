<!DOCTYPE html>
<html lang="en">
  <head>

    @include('components.admin.meta')

    @include('components.admin.fonts')

    @include('components.admin.css')

  </head>
  <body @yield('time')>

    @yield('content')

  </body>
</html>

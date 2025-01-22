<!DOCTYPE html>
<html lang="en">
  <head>

    @include('components.admin.meta')

    @include('components.admin.fonts')

    @include('components.admin.css')

    @push('plugins')
    <link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/select.bootstrap5.css">
    @endpush

  </head>
  <body onload="startTime()">

    @yield('content')

  </body>
</html>

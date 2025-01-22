@extends('layouts.main')

@section('content')

    @include('components.admin.loader')
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('components.admin.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      @include('components.admin.sidebar')
        @yield('page')
      @include('components.admin.footer')
    </div>
  </div>

  @include('components.admin.js')

  @endsection

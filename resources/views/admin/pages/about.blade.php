@extends('admin.adminlayout')


@push('plugincss')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/slick.css">
<link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/slick-theme.css">
<link rel="stylesheet" type="text/css" href="assets/admin/css/vendors/scrollbar.css">
<!-- Plugins css Ends-->
@endpush


@push('pluginjs')
<!-- Plugins JS start-->
<script src="assets/admin/js/sidebar-menu.js"></script>
<script src="assets/admin/js/sidebar-pin.js"></script>
<script src="assets/admin/js/slick/slick.min.js"></script>
<script src="assets/admin/js/slick/slick.js"></script>
<script src="assets/admin/js/header-slick.js"></script>
<!-- Plugins JS Ends-->
@endpush


@section('page')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-sm-6">
            <h3>About Section</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">
                  <svg class="stroke-icon">
                    <use href="assets/admin/svg/icon-sprite.svg#stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active">About Section</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
            @livewire('service-table')
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection

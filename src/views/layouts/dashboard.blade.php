<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php $pagetitle = $__env->yieldContent('title'); ?>
  <title>{{ config('app.name', 'Dashboard') }} @if ($pagetitle) &bull; {{ $pagetitle }} @endif</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset(Config::get('dashboard.bootstrap-css')) }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset(Config::get('dashboard.font-awesome')) }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset(Config::get('dashboard.ion-icons')) }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/adminlte.min.css') }}">

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ Dashboard::skinUrl() }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  @stack('styles')

  {{ Dashboard::scripts('head') }}
  @stack('header_scripts')
</head>
<body class="{{ Dashboard::themeClassnames() }}">
<div class="wrapper" id="app">

  <!-- Main Header -->
  @include('dashboard::partials.header')

  <!-- Left side column. contains the logo and sidebar -->
  @include('dashboard::partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          @yield('page_title')
        <small>@yield('page_description')</small>
      </h1>
      <ol class="breadcrumb">
          @yield('breadcrumbs')
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('dashboard::partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      @yield('tab_panes')      
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
{{ Dashboard::scripts('local') }}

{{ Dashboard::scripts('footer') }}

<script>
  $('[data-route-param]').each(function (i, item) {
    var param = item.dataset['routeParam'];
    item.setAttribute('href', item.getAttribute('href') + '/' + param);
  });
</script>

@stack('footer_scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
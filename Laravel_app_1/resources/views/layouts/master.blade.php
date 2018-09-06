<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <div style="margin: 1px;">
    <a class="logo" >
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Panel</span>
    </a>
  </div>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <div>
        
          @include("inc.admin-navbar")

      </div>
    </nav>
    
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <br>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        {{-- <div class="pull-left image">
          <img src="{{ asset('images/avatar5.png') }}" class="img-circle" alt="User Image">
        </div> --}}
        <div class="pull-left info"style = "position: sticky; padding: 15px 5px 5px 15px">
          <p style="font-weight: unset"><span>{{ Auth::user()->name }}</span></p>
          {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
          <!-- Status -->
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/dashboard"><i class="fa fa-link"></i> <span>Dashboard </span></a></li>
        <li><a href="users"><i class="fa fa-link"></i><span>View Users</span></a></li>
        <li><a href="/posts"><i class="fa fa-link"></i><span>View Posts</span></a></li>
        
        <li >
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="fa fa-link"></i>
          {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
          </form>
      </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <br>
      <h1>
        Admin Dashboard
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
      @endif

      <!--------------------------
        |     Page Content       |
        -------------------------->
        
        @yield('content')
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <div class="pull-left hidden-xs">
      <strong> &copy; 2018 <a href="#">SCIT</a>.</strong> 
    </div>
  </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
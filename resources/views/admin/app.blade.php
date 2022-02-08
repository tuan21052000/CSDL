<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
     <!-- Main CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}" />
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"href="{{asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css')}}"/> 
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body class="app slider-mini rtl">
      @include('admin.partials.header')
      @include('admin.partials.sidebar')
      <main class="app-content">
        @yield('content')
      </main>


   <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script> 
    <script src="{{ asset('backend/js/popper.min.js') }}"></script> 
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script> 
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Biblioteca</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    @yield('css')
    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    {{-- Magazine Style --}}
    {{-- AdminLTE --}}
    <link rel="stylesheet" href="{{URL::asset('css/AdminLTE.min.css')}}">
    {{-- end AdminLTE --}}
    <link rel="stylesheet" href="{{ URL::asset('css/magazinesStyle.css')}}">
    {{--end  Magazine Style --}}
    {{-- dataTables --}}
    <link rel="stylesheet" href="{{URL::asset('css/dataTables.bootstrap.css')}}">
    {{-- end dataTables --}}
    {{-- selector mulltiple --}}
    <link rel="stylesheet" href="{{URL::asset('css/select2.min.css')}}">
    {{-- end selector multiple --}}



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @include('admin.layouts.header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('admin.layouts.aside')
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href="#">SpDkMn</a>.</strong> All rights
        reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
    <script src="{{ URL::asset('js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    {{-- Magazine JScript --}}
    <!-- <script src="{{ URL::asset('js/magazineJS.js')}}"></script> -->
    {{--end Magazine JScript --}}
    @yield('plugins')
    <script src="{{ URL::asset('js/fastclick.js')}}"></script>
    <script src="{{ URL::asset('js/app.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
    <!-- Selector multiple  -->
    <script src="{{ URL::asset('js/select2.full.min.js')}}"></script>
    <!-- Los js de abajo seran guardados en un solo archivo .js  -->
    @yield('scriptContent')
    @yield('scriptItem')
    @yield('scriptDelete')
    @yield('scriptTable')
    @yield('scriptTableExtend')
    @yield('scriptSelect')
    @yield('scriptModal')
    @yield('scriptModalContent')
    <!-- Js para enviar el id de una revista seleccionada -->



  </body>
</html>

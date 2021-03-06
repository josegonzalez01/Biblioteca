<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sistema de Biblioteca </title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

@yield('css')
<!-- HOJAS DE ESTILO - USER -->
	<link rel="stylesheet" href="{{ URL::asset('css/modalStyles.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-combined.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/estiloLibro.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/magazinesStyle.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/dataTables.bootstrap.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('plugins/select2/select2.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/fullcalendar.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/tableConfig.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-multiselect.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/SearchStyle.css')}}">


	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



<!-- CIERRE DE LAS HOJAS DE ESTILO  -->
<!-- ARCHIVOS JS -->
<script src="{{ URL::asset('js/jquery-2.2.3.min.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap-multiselect.js')}}"></script>

<!-- FIN DE ARCHIVOS JS -->
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('user.layouts.header')
		<!-- Left side column. contains the logo and sidebar -->
		@include('user.layouts.aside')
		<div class="content-wrapper">@yield('content')</div>



	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.0.0
		</div>
		<strong>Copyright &copy; 2017 <a href="#">Bibliofisi</a>.
		</strong> All rights reserved.
	</footer>
</div>

	<!-- ./wrapper -->
	@yield('plugins')


	<script type="text/javascript" src="{{URL::asset('js/ajax.js')}}"></script>


	<script	src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{ URL::asset('js/fastclick.js')}}"></script>
	<script src="{{ URL::asset('js/app.min.js')}}"></script>
	<script src="{{URL::asset('plugins/select2/select2.full.min.js')}}"></script>
	<script src="{{URL::asset('plugins/fullcalendar/jquery-ui.min.js')}}"></script>
	<script src="{{URL::asset('plugins/fullcalendar/moment.min.js')}}"></script>
	<script src="{{URL::asset('plugins/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{ URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ URL::asset('js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ URL::asset('js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{ URL::asset('js/bootstrap-datetimepicker.pt-PE.js')}}"></script>



	<script type="text/javascript">
	(function() {
	$('#btn-search').on('click', function(e) {
	  e.preventDefault();
	  $('#search').animate({width: 'toggle'}).focus();
	});
	}());
	</script>


 </body>




</html>

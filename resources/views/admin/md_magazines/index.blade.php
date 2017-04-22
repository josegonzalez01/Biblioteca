@extends('admin.layouts.main')
@section('content')
	{{-- Contenedor Cabecera --}}
	<section class="content-header">
		<h1>
			Revistas
			<small> -- </small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li class="active">Revistas</li>
		</ol>
	</section>
	<section class="content">
		 <div class="row">
    		<div class="col-md-12">
    		 	{{-- Momentaneo  -> Cargar vista new --}}
      			{!! $show !!}
   		 </div>
		 </div>
	</section>
	{{-- Contenedor principal --}}
	<section class="content">
		 <div class="row">
    		<div class="col-md-6">
    		 	{{-- Momentaneo  -> Cargar vista new --}}
				{!! $new  !!}
   		 	</div>
			<div id="divEdit" class="col-md-6">
      			{!! $edit!!}
   		 	</div>
		</div>
	</section>
	<section class="content">
		<div class="row">
				<div id="divContent">
					{!! $content!!}
				</div>
		</div>
	</section>
	{!! $delete !!}


@endsection

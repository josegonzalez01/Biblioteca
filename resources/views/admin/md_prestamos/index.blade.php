@extends('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->


<section class="content-header">
  
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Tesis</li>
  </ol>
</section>  

<!-- Main content -->

<section class="content">

  <div class="row">
     <br>
        
        <div class="col-md-12 " id="div-content">
        <div id="print"></div>
          {!! $showPedidos !!}
        </div>
        <div class="col-md-12 " id="div-content">
          {!! $showPrestamo !!}
        </div> 
        <div class="col-md-12 " id="div-content">
          {!! $showSeleccion !!}
        </div>


  </div>
  <div class="row">
        <div class="col-md-6" id="div-content">

        </div>  
        <div id="divEdit" class="col-md-6">
          
        </div>      

      
  </div>
  
</section>


@endsection



@extends('admin.layouts.layout')

@section('title')
  @if(isset($item)){{ $item->name }} | @endif Категории товаров
@stop

@section('styles')
<!-- Bootstrap core CSS -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-datepicker/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-fileupload/bootstrap-fileupload.css">
    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css">

    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet">
@stop

@section('content')
<!-- page start-->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        @if(isset($item)) {{ $item->name }} - Изменить категорию @else Добавить категорию @endif
      </header>
      <div class="panel-body">

        @if(isset($item)) 
          {{ Form::open(['method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal tasi-form']) }} 
        @else 
          {{ Form::open(['action' => 'DashboardController@categoryAdd', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal tasi-form']) }} 
        @endif
        
        @include('admin.forms.category')
        {{ Form::close() }}
      </div>
    </section>
  </div>
</div>
<!-- page end-->
@stop

@section('scripts')
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="/admin/js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="/admin/js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="/admin/js/ga.js"></script>

  <script type="text/javascript" src="/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="/admin/assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="/admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="/admin/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="/admin/assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="/admin/js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="/admin/js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="/admin/js/form-component.js"></script>
@stop
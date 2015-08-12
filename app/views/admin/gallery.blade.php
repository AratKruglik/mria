@extends('admin.layout')

@section('title')
Галлерея фото
@stop

@section('styles')
<!-- Bootstrap core CSS -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/admin/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="/admin/js/html5shiv.js"></script>
      <script src="/admin/js/respond.min.js"></script>
    <![endif]-->
@stop

@section('content')
 <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Все галлереи портфолио
                          </header>
                          <div class="panel-body">
                              @if (isset($message))
                                <div class="alert alert-success alert-block fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <h4>
                                      <i class="icon-ok-sign"></i>
                                      Успешно!
                                  </h4>
                                  <p>{{ $message }}</p>
                                </div>
                              @endif
                                <div class="adv-table">
{{--                                   <div class="col-sm-10 pull-left">
                                      <a href="portfolio/add" class="btn btn-info "><i class="icon-plus"></i> Добавить проект</a>
                                  </div> --}}
                                    <table  class="display table table-bordered table-striped" id="portfolio">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Название проекта</th>
                                          <th>Добавлено</th>
                                          <th>Изменения</th>
                                          <th class="hidden-phone">Видимость</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($galleries as $gallery)
                                      <tr class="gradeX">
                                          <td>{{ $gallery->id }}</td>
                                          <td><a href="gallery/edit/{{ $gallery->id }}">{{ $gallery->title }}</a></td>
                                          <td class="center">{{ date('d.m.Y', strtotime($gallery->created_at)) }}</td>
                                          <td class="center">{{ date('d.m.Y', strtotime($gallery->updated_at)) }}</td>
                                          <td class="center hidden-phone">
                                            @if($gallery->visible == 1) <span class="label label-success">Видимый</span> 
                                              @else <span class="label label-danger">Невидимый</span>
                                            @endif
                                            </td>
                                      </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>ID</th>
                                          <th>Название проекта</th>
                                          <th>Добавлено</th>
                                          <th>Изменения</th>
                                          <th class="hidden-phone">Видимость</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
@stop

@section('scripts')
    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="/admin/js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="/admin/assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="/admin/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script src="/admin/js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="/admin/js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#portfolio').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
      </script>
@stop
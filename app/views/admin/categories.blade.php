@extends('admin.layouts.layout')

@section('title')
Категории
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
                              Категории
                          </header>
                          <div class="panel-body">
                              @if (isset($mess))
                                <div class="alert alert-success alert-block fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <h4>
                                      <i class="icon-ok-sign"></i>
                                      Успешно!
                                  </h4>
                                  <p>{{ $mess }}</p>
                                </div>
                              @endif
                                <div class="adv-table">
                                  <div class="col-sm-10 pull-left">
                                      <a href="categories/add" class="btn btn-info "><i class="icon-plus"></i> Добавить новую категорию</a>
                                  </div>
                                    <table  class="display table table-bordered table-striped" id="portfolio">
                                      <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Название</th>
                                          <th>Добавлено</th>
                                          <th>Изменено</th>
                                          <th class="hidden-phone">Видимость</th>
                                          <th class="hidden-phone">Действия</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($categories as $item)
                                      <tr class="gradeX">
                                          <td>{{ $item->id}}</td>
                                          <td>{{ $item->name }}</td>
                                          <td class="center">{{ date('d.m.Y', strtotime($item->created_at)) }}</td>
                                          <td class="center">{{ date('d.m.Y', strtotime($item->updated_at)) }}</td>
                                          <td class="center hidden-phone">
                                            @if($item->active == 1) <span class="label label-success">Видимая</span> 
                                              @else <span class="label label-danger">Невидимая</span>
                                            @endif
                                            </td>
                                          <td class="center hidden-phone">
                                            <div class="btn-group">
                                              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Действия <span class="caret"></span>
                                              </button>
                                              <ul role="menu" class="dropdown-menu">
                                                  <li><a href="categories/edit/{{ $item->id }}"><span class="fa icon-edit"></span> Изменить</a></li>
                                                  <li class="divider"></li>
                                                  <li><a href="categories/drop/{{ $item->id }}" onclick="return window.confirm('Вы точно хотите удалить категорию {{ $item->name }}')"> <span class="fa icon-trash"></span> Удалить</a></li>
                                              </ul>
                                            </div><!-- /btn-group -->
                                          </td>
                                      </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>ID</th>
                                          <th>Название</th>
                                          <th>Добавлено</th>
                                          <th>Изменено</th>
                                          <th class="hidden-phone">Видимость</th>
                                          <th class="hidden-phone">Действия</th>
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
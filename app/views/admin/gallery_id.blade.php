@extends('admin.layouts.layout')

@section('title')
  @if(isset($project->title)){{ $project->title }} | @endif Галерея
@stop

@section('styles')
<!-- Bootstrap core CSS -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet" />
    <!--external css-->
    <link href="/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet" />
    <link href="/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="/admin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/admin/css/gallery.css" />
    <link href="/admin/assets/dropzone/css/dropzone.css" rel="stylesheet"/>
@stop

@section('content')
<!-- page start-->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
       @if(isset($item->name)) {{ $item->name }} - Галерея фото @endif
      </header>
      @if($errors->any())
      <div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
              <i class="icon-remove"></i>
            </button>
            <strong>Ошибка!</strong> {{$errors->first()}}
          </div>
      @endif
      <div class="panel-body">
        <ul class="grid cs-style-3">
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/4.jpg" alt="img04">
                                  <figcaption>
                                      <h3>Mindblowing</h3>
                                      <span>lorem ipsume </span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/4.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/1.jpg" alt="img01">
                                  <figcaption>
                                      <h3>Clean & Fresh</h3>
                                      <span>dolor ament</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/1.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/2.jpg" alt="img02">
                                  <figcaption>
                                      <h3>Flat Concept</h3>
                                      <span>tawseef tasi</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/2.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/5.jpg" alt="img05">
                                  <figcaption>
                                      <h3>Modern</h3>
                                      <span>dkmosa inc</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/5.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/3.jpg" alt="img03">
                                  <figcaption>
                                      <h3>Clean Code</h3>
                                      <span>nice concept</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/3.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/6.jpg" alt="img06">
                                  <figcaption>
                                      <h3>Cheers</h3>
                                      <span>sumon ahmed</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/6.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/4.jpg" alt="img04">
                                  <figcaption>
                                      <h3>Freshness</h3>
                                      <span>rerum facilis </span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/4.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/1.jpg" alt="img01">
                                  <figcaption>
                                      <h3>Awesome</h3>
                                      <span>At vero eos</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/1.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/2.jpg" alt="img02">
                                  <figcaption>
                                      <h3>Music</h3>
                                      <span>atque corrupti </span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/2.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/3.jpg" alt="img03">
                                  <figcaption>
                                      <h3>Clean Code</h3>
                                      <span>nice concept</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/3.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/6.jpg" alt="img06">
                                  <figcaption>
                                      <h3>Cheers</h3>
                                      <span>sumon ahmed</span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/6.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="/admin/img/gallery/4.jpg" alt="img04">
                                  <figcaption>
                                      <h3>Freshness</h3>
                                      <span>rerum facilis </span>
                                      <a class="fancybox" rel="group" href="/admin/img/gallery/4.jpg">Take a look</a>
                                  </figcaption>
                              </figure>
                          </li>
                      </ul>
      </div>
    </section>

    <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Dropzone File Upload
                  </header>
                  <div class="panel-body">
                      {{-- <form action="assets/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone"> --}}
                      {{ Form::open(['action' => 'DashboardController@galleryPhotoUpload', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}              
                      <input type="hidden" name="id" value="{{ $item->id }}">                    
  {{-- ПРОСТУЮ ФОРМУ НА 5 ИНПУТОВ --}}
                      {{ Form::close() }}
                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </div>
</div>
<!-- page end-->
@stop

@section('scripts')
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/admin/assets/fancybox/source/jquery.fancybox.js"></script>
    <script src="/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/admin/js/respond.min.js" ></script>
    <script src="/admin/assets/dropzone/dropzone.js"></script>

    <script src="/admin/js/modernizr.custom.js"></script>
    <script src="/admin/js/toucheffects.js"></script>


    <!--common script for all pages-->
    <script src="/admin/js/common-scripts.js"></script>

  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
@stop
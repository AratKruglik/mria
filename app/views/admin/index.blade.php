@extends('admin.layouts.layout')

@section('title')
Інфографіка
@stop

@section('styles')

    <!-- Bootstrap core CSS -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/admin/css/owl.carousel.css" type="text/css">
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
<!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="icon-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  {{count($users)}}
                              </h1>
                              <p>Пользователей</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="icon-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  {{--$orders--}}
                              </h1>
                              <p>Обработ. заказов</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="icon-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  {{--$newOrders--}}
                              </h1>
                              <p>Новых заказов</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="icon-bar-chart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  {{--$summ--}}
                              </h1>
                              <p>Сумма заказов</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->

              <div class="row">
              
                  <div class="col-lg-6">
                      <!--new earning start-->
                      <div class="panel terques-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span>Продажи за неделю</span>
                                      <strong>{{--$summ--}} грн. | 15%</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">New Earning</span>
                              <span class="value">
                                  <a href="#" class="active">Market</a>
                                  |
                                  <a href="#">Referal</a>
                                  |
                                  <a href="#">Online</a>
                              </span>
                          </div>
                      </div>
                    </div>
                      <!--new earning end-->

                      <!--total earning start-->
                      <div class="col-lg-6">
                      <div class="panel green-chart">
                          <div class="panel-body">
                              <div class="chart">
                                  <div class="heading">
                                      <span>June</span>
                                      <strong>23 Days | 65%</strong>
                                  </div>
                                  <div id="barchart"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">Total Earning</span>
                              <span class="value">$, 76,54,678</span>
                          </div>
                      </div>
                      <!--total earning end-->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel">
                          <div class="panel-body">
                              <a href="#" class="task-thumb">
                                  <img src="img/avatar1.jpg" alt="">
                              </a>
                              <div class="task-thumb-details">
                                  <h1><a href="#">Anjelina Joli</a></h1>
                                  <p>Senior Architect</p>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                                <tr>
                                    <td>
                                        <i class=" icon-tasks"></i>
                                    </td>
                                    <td>New Task Issued</td>
                                    <td> 02</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-warning-sign"></i>
                                    </td>
                                    <td>Task Pending</td>
                                    <td> 14</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-envelope"></i>
                                    </td>
                                    <td>Inbox</td>
                                    <td> 45</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class=" icon-bell-alt"></i>
                                    </td>
                                    <td>New Notification</td>
                                    <td> 09</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
                  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Work Progress</h1>
                                  <p>Anjelina Joli</p>
                              </div>
                              <div class="task-option">
                                  <select class="styled">
                                      <option>Anjelina Joli</option>
                                      <option>Tom Crouse</option>
                                      <option>Jhon Due</option>
                                  </select>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>
                                      Target Sell
                                  </td>
                                  <td>
                                      <span class="badge bg-important">75%</span>
                                  </td>
                                  <td>
                                    <div id="work-progress1"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>
                                      Product Delivery
                                  </td>
                                  <td>
                                      <span class="badge bg-success">43%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>
                                      Payment Collection
                                  </td>
                                  <td>
                                      <span class="badge bg-info">67%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress3"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>
                                      Work Progress
                                  </td>
                                  <td>
                                      <span class="badge bg-warning">30%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>
                                      Delivery Pending
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">15%</span>
                                  </td>
                                  <td>
                                      <div id="work-progress5"></div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8">
                      <!--timeline start-->
                      <section class="panel">
                          <div class="panel-body">
                                  <div class="text-center mbot30">
                                      <h3 class="timeline-title">Timeline</h3>
                                      <p class="t-info">This is a project timeline</p>
                                  </div>

                                  <div class="timeline">
                                      <article class="timeline-item">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow"></span>
                                                      <span class="timeline-icon red"></span>
                                                      <span class="timeline-date">08:25 am</span>
                                                      <h1 class="red">12 July | Sunday</h1>
                                                      <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                      <article class="timeline-item alt">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow-alt"></span>
                                                      <span class="timeline-icon green"></span>
                                                      <span class="timeline-date">10:00 am</span>
                                                      <h1 class="green">10 July | Wednesday</h1>
                                                      <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                      <article class="timeline-item">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow"></span>
                                                      <span class="timeline-icon blue"></span>
                                                      <span class="timeline-date">11:35 am</span>
                                                      <h1 class="blue">05 July | Monday</h1>
                                                      <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                                      <div class="album">
                                                          <a href="#">
                                                              <img alt="" src="img/sm-img-1.jpg">
                                                          </a>
                                                          <a href="#">
                                                              <img alt="" src="img/sm-img-2.jpg">
                                                          </a>
                                                          <a href="#">
                                                              <img alt="" src="img/sm-img-3.jpg">
                                                          </a>
                                                          <a href="#">
                                                              <img alt="" src="img/sm-img-1.jpg">
                                                          </a>
                                                          <a href="#">
                                                              <img alt="" src="img/sm-img-2.jpg">
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                      <article class="timeline-item alt">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow-alt"></span>
                                                      <span class="timeline-icon purple"></span>
                                                      <span class="timeline-date">3:20 pm</span>
                                                      <h1 class="purple">29 June | Saturday</h1>
                                                      <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                                      <div class="notification">
                                                          <i class=" icon-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                      <article class="timeline-item">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow"></span>
                                                      <span class="timeline-icon light-green"></span>
                                                      <span class="timeline-date">07:49 pm</span>
                                                      <h1 class="light-green">10 June | Friday</h1>
                                                      <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                  </div>

                                  <div class="clearfix">&nbsp;</div>
                              </div>
                      </section>
                      <!--timeline end-->
                  </div>
                  <div class="col-lg-4">
                      <!--revenue start-->
                      <section class="panel">
                          <div class="revenue-head">
                              <span>
                                  <i class="icon-bar-chart"></i>
                              </span>
                              <h3>Revenue</h3>
                              <span class="rev-combo pull-right">
                                 June 2013
                              </span>
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-6 col-sm-6 text-center">
                                      <div class="easy-pie-chart">
                                          <div class="percentage" data-percent="35"><span>35</span>%</div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-sm-6">
                                      <div class="chart-info chart-position">
                                          <span class="increase"></span>
                                          <span>Revenue Increase</span>
                                      </div>
                                      <div class="chart-info">
                                          <span class="decrease"></span>
                                          <span>Revenue Decrease</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="panel-footer revenue-foot">
                              <ul>
                                  <li class="first active">
                                      <a href="javascript:;">
                                          <i class="icon-bullseye"></i>
                                          Graphical
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class=" icon-th-large"></i>
                                          Tabular
                                      </a>
                                  </li>
                                  <li class="last">
                                      <a href="javascript:;">
                                          <i class=" icon-align-justify"></i>
                                          Listing
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </section>
                      <!--revenue end-->
                      <!--features carousel start-->
                      <section class="panel">
                          <div class="flat-carousal">
                              <div id="owl-demo" class="owl-carousel owl-theme">
                                  <div class="item">
                                      <h1>Flatlab is new model of admin dashboard for happy use</h1>
                                      <div class="text-center">
                                          <a href="javascript:;" class="view-all">View All</a>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <h1>Fully responsive and build with Bootstrap 3.0</h1>
                                      <div class="text-center">
                                          <a href="javascript:;" class="view-all">View All</a>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <h1>Responsive Frontend is free if you get this.</h1>
                                      <div class="text-center">
                                          <a href="javascript:;" class="view-all">View All</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="panel-body">
                              <ul class="ft-link">
                                  <li class="active">
                                      <a href="javascript:;">
                                          <i class="icon-reorder"></i>
                                          Sales
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class=" icon-calendar-empty"></i>
                                          promo
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class=" icon-camera"></i>
                                          photo
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class=" icon-circle"></i>
                                          other
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </section>
                      <!--features carousel end-->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8">
                      <!--latest product info start-->
                      <section class="panel post-wrap pro-box">
                          <aside>
                              <div class="post-info">
                                  <span class="arrow-pro right"></span>
                                  <div class="panel-body">
                                      <h1><strong>popular</strong> <br> Brand of this week</h1>
                                      <div class="desk yellow">
                                          <h3>Dimond Ring</h3>
                                          <p>Lorem ipsum dolor set amet lorem ipsum dolor set amet ipsum dolor set amet</p>
                                      </div>
                                      <div class="post-btn">
                                          <a href="javascript:;">
                                              <i class="icon-chevron-sign-left"></i>
                                          </a>
                                          <a href="javascript:;">
                                              <i class="icon-chevron-sign-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </aside>
                          <aside class="post-highlight yellow v-align">
                              <div class="panel-body text-center">
                                  <div class="pro-thumb">
                                      <img src="img/ring.jpg" alt="">
                                  </div>
                              </div>
                          </aside>
                      </section>
                      <!--latest product info end-->
                      <!--twitter feedback start-->
                      <section class="panel post-wrap pro-box">
                          <aside class="post-highlight terques v-align">
                              <div class="panel-body">
                                  <h2>Flatlab is new model of admin dashboard <a href="javascript:;"> http://demo.com/</a> 4 days ago  by jonathan smith</h2>
                              </div>
                          </aside>
                          <aside>
                              <div class="post-info">
                                  <span class="arrow-pro left"></span>
                                  <div class="panel-body">
                                      <div class="text-center twite">
                                          <h1>Twitter Feed</h1>
                                      </div>

                                      <footer class="social-footer">
                                          <ul>
                                              <li>
                                                  <a href="#">
                                                    <i class="icon-facebook"></i>
                                                  </a>
                                              </li>
                                              <li class="active">
                                                  <a href="#">
                                                      <i class="icon-twitter"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="icon-google-plus"></i>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <i class="icon-pinterest"></i>
                                                  </a>
                                              </li>
                                          </ul>
                                      </footer>
                                  </div>
                              </div>
                          </aside>
                      </section>
                      <!--twitter feedback end-->
                  </div>
                  <div class="col-lg-4">
                      <div class="row">
                          <div class="col-xs-6">
                              <!--pie chart start-->
                              <section class="panel">
                                  <div class="panel-body">
                                      <div class="chart">
                                          <div id="pie-chart" ></div>
                                      </div>
                                  </div>
                                  <footer class="pie-foot">
                                      Free: 260GB
                                  </footer>
                              </section>
                              <!--pie chart start-->
                          </div>
                          <div class="col-xs-6">
                              <!--follower start-->
                              <section class="panel">
                                  <div class="follower">
                                      <div class="panel-body">
                                          <h4>Jonathan Smith</h4>
                                          <div class="follow-ava">
                                              <img src="img/follower-avatar.jpg" alt="">
                                          </div>
                                      </div>
                                  </div>

                                  <footer class="follower-foot">
                                      <ul>
                                          <li>
                                              <h5>2789</h5>
                                              <p>Follower</p>
                                          </li>
                                          <li>
                                              <h5>270</h5>
                                              <p>Following</p>
                                          </li>
                                      </ul>
                                  </footer>
                              </section>
                              <!--follower end-->
                          </div>
                      </div>
                      <!--weather statement start-->
                      <section class="panel">
                          <div class="weather-bg">
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-xs-6">
                                        <i class="icon-cloud"></i>
                                          California
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="degree">
                                              24°
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <footer class="weather-category">
                              <ul>
                                  <li class="active">
                                      <h5>humidity</h5>
                                      56%
                                  </li>
                                  <li>
                                      <h5>precip</h5>
                                      1.50 in
                                  </li>
                                  <li>
                                      <h5>winds</h5>
                                      10 mph
                                  </li>
                              </ul>
                          </footer>

                      </section>
                      <!--weather statement end-->
                  </div>
              </div>
@stop

@section('scripts')
<script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/jquery-1.8.3.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="/admin/js/owl.carousel.js" ></script>
    <script src="/admin/js/jquery.customSelect.min.js" ></script>
    <script src="/admin/js/respond.min.js" ></script>

    <script class="include" type="text/javascript" src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>

    <!--common script for all pages-->
    <script src="/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="/admin/js/sparkline-chart.js"></script>
    <script src="/admin/js/easy-pie-chart.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
 @stop
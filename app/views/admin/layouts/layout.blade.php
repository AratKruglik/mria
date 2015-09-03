<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('title') - Админпанель</title>
        {{ HTML::style('/css/font-awesome.min.css') }}
        @yield('styles')
  </head>

  <body>

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="/dashboard" class="logo">АН <span>"МРІЯ"</span></a>
            <!--logo end-->
            
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="@if (Auth::check()) {{ Auth::user()->avatar }} @endif" />
                            <span class="username">@if(Auth::check()) {{ Auth::user()->username }} @endif</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="/dashboard/users/edit/{{Auth::user()->id}}"><i class=" icon-suitcase"></i>Профіль</a></li>
                            <li><a href="/dashboard/settings"><i class="icon-cog"></i> Налаштування</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> Повідомлення</a></li>
                            <li><a href="/users/logout"><i class="icon-key"></i> Вийти</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      {{Widget::adminMenu()}}
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            @yield('content')
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              {{ date('Y') }} &copy; Arat's Adminpanel 3.0 beta
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    @yield('scripts')
  </body>
</html>

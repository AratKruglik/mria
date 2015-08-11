<div class="main-menu">
	<div class="container">
    	<a href="/"><img class="pull-left main-logo" alt="hometastic" src="/images/logo.png"></a>
        <div class="menu-button"><i class="fa fa-reorder"></i></div>
        <nav class="menu-container underscore-container menu-container-fadie">
            <ul>
                @foreach($menus as $menu)
                <li @if(Request::segment(1) == $menu->slug) class="active" @endif><a href="/{{ $menu->slug }}">{{ $menu->name }}</a></li>
                @endforeach
            </ul>
            <div class="underscore"><div class="underscore-inner"></div></div>
        </nav>
	</div><!-- .container -->
</div><!-- .main-menu -->
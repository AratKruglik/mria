@if (isset($config))
@foreach($config as $conf)
<div class="site-top">
	<div class="container clearfix">
        <div class="pull-left">
            <span class="site-top-item">
                <a href="mailto:{{ $conf->email }}"><i class="fa fa-envelope"></i> {{ $conf->email }}</a>
            </span>
            <span class="site-top-item">
                <i class="fa fa-phone"></i> {{ $conf->phone }}
            </span>
        </div>
        <div class="pull-right">
        	<div class="site-top-item">
            	<a href="/users/login"><i class="fa fa-user"></i> Увійти</a>
            </div>
            <div class="site-top-item">
            	<a href="/users/registration"><i class="fa fa-pencil"></i> Реєстрація</a>
            </div>
            {{-- <div class="site-top-item">
            	<form id="form-top-search">
            		<input type="text" name="s">
                    <input type="submit" value="Пошук">
                </form>
            	<a id="form-top-search-trigger" href="#"><i class="fa fa-search"></i></a>
        	</div> --}}
        </div>
    </div><!-- .container -->
</div><!-- .site-top -->
@endforeach
@endif
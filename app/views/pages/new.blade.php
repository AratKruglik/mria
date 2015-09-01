@extends('layouts.layout')

@section('meta_k') {{ $news['meta_k'] }} @stop
@section('meta_d') {{ $news['meta_d'] }} @stop
@section('title') {{ $news['name'] }} @stop

@section('content')
    
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Новини компанії</h1>
                    <h4>Будьте в курсі останніх подій  @foreach($configs as $config){{ $config->name }}@endforeach</h4>
        		</div>
                <div class="row">
                	<div class="col-md-9">
                        <article>
                            <div class="post-preview blog-post-single">
                                <section class="onscroll-animate">
                                    <div class="post-preview-img">
                                        <div class="post-preview-slider" id="post-preview-slider-1">
                                            <img alt="post img" src="{{ $news['cover'] }}">
                                        </div>
                                    </div>
                                </section>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">{{ $news['name'] }}</h2>
                                    <p class="post-preview-info"><i class="fa fa-calendar"></i> {{ $news['created_at'] }}</p>
                                    <p>{{ $news['body'] }}</p>
        
                                    <div class="post-preview-detail">
                                       <a href="/news" class="read-more-link-alt">Назад</a>
                                    </div>
                                </div>
                            </div>
                        </article>


                    </div><!-- .col-md-9 -->
                    
                    <div class="col-md-3 sidebar">
                        
                       
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Останні новини</h1>
                                </div>
                                @foreach($lastnews as $lastnews)
                                <article class="onscroll-animate" data-animation="fadeInRight">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="/news/view/{{ $lastnew->id }}"><img alt="{{ $lastnew->name }}" src="{{ $lastnew->cover }}" class="img-responsive"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>{{ $lastnew->name }}</h5>
                                            {{ $lastnew->created_at }} {{-- <span class="delimiter-inline"></span> <a href="#">2 Comments</a> --}}
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div><!-- .section-content -->
                        </section>
                        
                        
                        {{ Widget::propertySide() }}
                        
                    	<section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Пропозиції</h1>
                                </div>
                                <div class="post-preview">
                                    <a href="#">
                                        <section>
                                            <div class="post-preview-img">
                                                <img alt="post img" src="/images/listings/6.jpg">
                                                <div class="post-preview-label-big">
                                                	California Residence<br>
                                                    <strong>$300.000.00</strong>
                                                </div>
                                            </div>
                                        </section>
                                    </a>
                                </div>
                          	</div>
                     	</section>

                        
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Підписка</h1>
                                </div>
                                <p>Підпишісться на оновлення, щоб бути в курсі!</p>
                                <form class="form-layout1" id="rss-subscribe-2" action="#" method="post" data-email-not-set-msg="Email must be set" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully added">
                                    <input type="text" name="email" placeholder="ваш email...">
                                    <a href="#" class="form-submit"><i class="fa fa-envelope-alt"></i></a>
                                    <p class="return-msg"></p>
                                </form>
                            </div>
                        </section>
                        
                    	<section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Поділитись</h1>
                                </div>
                                <div class="onscroll-animate" data-animation="fadeInUp">
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div><!-- .section-content -->
                        </section>
                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
@stop
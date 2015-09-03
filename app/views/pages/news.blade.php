@extends('layouts.layout')

@section('meta_k') 123 @stop
@section('meta_d') 123s @stop
@section('title') Новини @stop

@section('content')   
    
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Наші новини</h1>
                    <h4>Слідкуйте за новою інформацію АН "Мрія" та будьте в курсі останніх подій</h4>
        		</div>
                <div class="row">
                	<div class="col-md-9">
                        @if(isset($news) && !empty($news))
                        @foreach($news as $new)
                        <article class="onscroll-animate">
                            <div class="post-preview blog-post-full">
                                <section>
                                    <div class="post-preview-img">
                                        <div class="post-preview-img-inner">
                                            <a href="/news/view/{{ $new->id }}" data-lightbox="{{ $new->cover }}"><img alt="post img" src="{{ $new->cover }}"></a>
                                        </div>
                                        <div class="post-img-detail">
                                            <div class="post-img-detail-wrapper">
                                                <div class="post-img-detail-content">
                                                    <a href="/news/view/{{ $new->id }}" class="read-more-link-alt">Більше</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading"><a href="/news/view/{{ $new->id }}">{{ $new->name }}</a></h2>
                                    <p class="post-preview-info"><i class="fa fa-calendar"></i> {{ $new->created_at->diffForHumans() }}</p>
                                    {{ str_limit($new->body, $limit = 100, $end = '...') }}
                                    {{-- <div class="post-preview-detail">
                                        <i class="fa fa-tag"></i> <a href="#">quotes</a>, <a href="#">illustration</a>, <a href="#">design</a>
                                    </div> --}}
                                </div>
                            </div>
                        </article>
                        @endforeach
                        @endif
                        
                        <div class="text-center onscroll-animate">
                            {{ $news->links() }}
                        </div>
                    </div><!-- .col-md-9 -->
                    
                    {{-- SIDEBAR --}}
                    <div class="col-md-3 sidebar">
                        
                       @if(isset($lastnews))
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
                        @endif
                        
                        {{ Widget::propertySide() }}
                        
                        @if(isset($lastproperty))
                        <section>
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Пропозиції</h1>
                                </div>
                                <div class="post-preview">
                                    <a href="#">
                                        <section>
                                            <div class="post-preview-img">
                                                <img alt="post img" src="{{ $lastproperty['cover'] }}">
                                                <div class="post-preview-label-big">
                                                    {{ $lastproperty['name'] }}<br>
                                                    <strong>{{ $lastproperty['price'] }}{{ $lastproperty['currency'] }}</strong>
                                                </div>
                                            </div>
                                        </section>
                                    </a>
                                </div>
                            </div>
                        </section>
                        @endif

                        
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

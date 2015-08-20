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
                    	<section>
                        	<div class="section-content">
                                <p>Search your choice</p>
                                <form class="form-layout1">
                                    <input type="text" name="s" placeholder="Type here">
                                    <a href="#" class="form-submit"><i class="fa fa-search"></i></a>
                                    <p class="return-msg"></p>
                                </form>
                          	</div>
                      	</section>
                        
                        <section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Tags</h1>
                                </div>
                                <div class="onscroll-animate">
                                    <div class="tag-container"><a class="tag" href="#">villa lux home</a></div>
                                    <div class="tag-container"><a class="tag" href="#">24ft</a></div>
                                    <div class="tag-container active"><a class="tag" href="#">residence 23ft</a></div>
                                    <div class="tag-container"><a class="tag" href="#">design</a></div>
                                    <div class="tag-container active"><a class="tag" href="#">properties</a></div>
                                    <div class="tag-container"><a class="tag" href="#">developmet</a></div>
                                    <div class="tag-container"><a class="tag" href="#">visualisation</a></div>
                          		</div>
                            </div>
                      	</section>
                        
                        <section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Latest News</h1>
                                </div>
                                <article class="onscroll-animate" data-animation="fadeInRight">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="blog_single.html"><img alt="img" src="images/listings/thumbnails/7.jpg"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>Awesome Real Estate</h5>
                                            12.April.2014 <span class="delimiter-inline"></span> <a href="#">2 Comments</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="blog_single.html"><img alt="img" src="images/listings/thumbnails/8.jpg"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>Wordpress Template</h5>
                                            12.April.2014 <span class="delimiter-inline"></span> <a href="#">2 Comments</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="onscroll-animate" data-animation="fadeInRight" data-delay="600">
                                    <div class="post-small">
                                        <div class="post-small-img">
                                            <a href="blog_single.html"><img alt="img" src="images/listings/thumbnails/9.jpg"></a>
                                        </div>
                                        <div class="post-small-content">
                                            <h5>PSD Themes for Sale</h5>
                                            12.April.2014 <span class="delimiter-inline"></span> <a href="#">2 Comments</a>
                                        </div>
                                    </div>
                                </article>
                          	</div><!-- .section-content -->
                      	</section>
                        
                        <section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Categories</h1>
                                </div>
                                <ul class="list-values">
                                    <li class="onscroll-animate" data-animation="fadeInRight">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Sport Properties</div>
                                                <div class="list-values-value">15</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="300">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Gardens</div>
                                                <div class="list-values-value">25</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Building Properties</div>
                                                <div class="list-values-value">44</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="500">
                                        <a href="#">
                                            <article>
                                                <div class="list-values-content">Lake Properties</div>
                                                <div class="list-values-value">12</div>
                                            </article>
                                        </a>
                                    </li>
                              	</ul>
                          	</div><!-- .section-content -->
                      	</section>
                        
                    	<section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Featured Property</h1>
                                </div>
                                <div class="post-preview">
                                    <a href="#">
                                        <section>
                                            <div class="post-preview-img">
                                                <img alt="post img" src="images/listings/6.jpg">
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
                                    <h1>News Letter</h1>
                                </div>
                                <p>Subscribe for latest news</p>
                                <form class="form-layout1" id="rss-subscribe-2" action="http://ignitionthemes.eu/theme/homet/save_rss.php" method="post" data-email-not-set-msg="Email must be set" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully added">
                                    <input type="text" name="email" placeholder="your email...">
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

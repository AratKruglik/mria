@extends('layouts.layout')

@section('meta_d')@stop

@section('meta_k')@stop

@section('title') {{ $item->name }} @stop

	<!-- ТУТ ФОРМА ПОИСКА МОЖЕТ БІТЬ ВЗЯТЬ ИЗ ДУРГИХ СТРАНИЦ -->
@section('content')
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>{{ $item->name }}</h1>
                    <h4>{{ $item->address }}</h4>
        		</div>
                <div class="row">
                	<div class="col-md-9">
                    	<section id="slider-section">
                            <div id="flex-slider" class="preview-images-slider">
                                <ul class="slides">
                                    <li>
                                        <div class="preview-single">
                                            <a href="{{ $item->cover }}" data-lightbox="post1-img"><img alt="slide1" src="{{ $item->cover }}"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">100 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">4 кімнати</a> <span class="delimiter-inline-alt"></span> <a href="#">1 санвузол</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            4 000 грн. <span class="small">в місяць</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">оренда</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @if(isset($photos))
                                    @foreach($photos as $photo)
                                    <li>
                                        <div class="preview-single">
                                            <a href="{{ $photo->path }}" data-lightbox="post1-img"><img alt="{{ $item->name }}" src="{{ $photo->path }}"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">100 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">4 кімнати</a> <span class="delimiter-inline-alt"></span> <a href="#">1 санвузол</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            4 000 грн. <span class="small">в місяць</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">оренда</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                   {{--  <li>
                                        <div class="preview-single">
                                            <a href="/images/listings/big.jpg" data-lightbox="post1-img"><img alt="slide1" src="/images/listings/big.jpg"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">100 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">4 кімнати</a> <span class="delimiter-inline-alt"></span> <a href="#">1 санвузол</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            4 000 грн. <span class="small">в місяць</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">оренда</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="preview-single">
                                            <a href="/images/listings/big.jpg" data-lightbox="post1-img"><img alt="slide1" src="/images/listings/big.jpg"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">100 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">4 кімнати</a> <span class="delimiter-inline-alt"></span> <a href="#">1 санвузол</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            4 000 грн. <span class="small">в місяць</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">оренда</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="preview-single">
                                            <a href="/images/listings/big.jpg" data-lightbox="post1-img"><img alt="slide1" src="/images/listings/big.jpg"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">100 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">4 кімнати</a> <span class="delimiter-inline-alt"></span> <a href="#">1 санвузол</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            4 000 грн. <span class="small">в місяць</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">оренда</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="preview-single">
                                            <a href="/images/listings/big.jpg" data-lightbox="post1-img"><img alt="slide1" src="/images/listings/big.jpg"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">100 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">4 кімнати</a> <span class="delimiter-inline-alt"></span> <a href="#">1 санвузол</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            4 000 грн. <span class="small">в місяць</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">оренда</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div><!-- #slider -->
                            <div class="onscroll-animate" data-animation="fadeInUp">
                                <div id="flex-carousel" class="preview-thumnails-slider">
                                    <ul class="slides">
                                        <li>
                                            <img alt="slide1 thumbnail" style="height: 106px;" src="{{ $item->cover }}">
                                        </li>
                                    @if(isset($photos))
                                    @foreach($photos as $photo)
                                        <li>
                                            <img alt="slide1 thumbnail" style="height: 106px;" src="{{ $photo->path }}">
                                        </li>
                                    @endforeach
                                    @endif
                                    </ul>
                                </div><!-- #carousel -->
                            </div><!-- .onscroll-animate -->
                            <p class="onscroll-animate" data-animation="fadeInUp">
                                {{ $item->description }}
                            </p>
                    	</section>
                        
                        <!-- <section id="videos-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                	<h1>Live previews - video</h1>
                                </div>
                                <div class="row">
                                	<div class="col-md-6 onscroll-animate">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/9d8wWcJLnFI"></iframe>
                                        </div>
                                        <div class="margin-20"></div>
                                    </div>
                                    <div class="col-md-6 onscroll-animate" data-delay="500">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/9d8wWcJLnFI"></iframe>
                                        </div>
                                        <div class="margin-20"></div>
                                    </div>
                                </div>
                           	</div>
                      	</section> -->
                        
                        <section id="map-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                	<h1>Карта</h1>
                                    <h4>Місцезнаходження на карті</h4>
                                </div>
                                <!-- Google Map -->
                                <div class="google-map-container">
                                    <div class="google-map">
                                        <div id="map-canvas"></div>
                                    </div>
                                </div>
								<!-- /Google Map -->
                           	</div>
                      	</section>
                        
                        <section id="listings-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                	<h1>Як зв'язатись?</h1>
                                </div>
                                <div class="row">
                                	<div class="col-md-8">
                                        <div class="profile">
                                        	<div class="row">
                                            	<div class="col-xs-6">
                                                    <div class="profile-img">
                                                        <img alt="agent" src="images/agents/2.jpg">
                                                        <div class="profile-img-info">
                                                            <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                                            <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                                            <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                                            <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                                            <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 text-left onscroll-animate" data-animation="fadeInUp">
                                    				<h5 class="profile-heading">Іван Іванов</h5>
                                                    <p>агент з нерухомості</p>
                                                    <div class="profile-cotent">
                                                    	<p>Описання крутого агента</p>
                                                    </div>
                                                    <p>
                                                        <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                                        <i class="fa fa-envelope-alt"></i> i.ivanov@mria.com<br>
                                                        <i class="fa fa-money"></i> 57 угод
                                                    </p>
                                                    <a href="agents.html" class="read-more-link-alt"><span class="text-smaller">Детальніше</span></a>
                                                </div>
                                          	</div><!-- .row -->
                                      	</div><!-- .profile -->
                                    </div><!-- .col-md-8 -->
                                    <div class="col-md-4 onscroll-animate" data-animation="fadeInUp">
                                    	<h3 class="section-small-heading">Надішліть повідомлення</h3>
                                        <form class="form-contact" id="contact-form-agent" action="http://ignitionthemes.eu/theme/homet/send_email_john_doe.php" method="post" data-all-fields-required-msg="All fields are required" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully sent.">
                                            <input type="text" name="name" placeholder="Імя">
                                            <input type="text" name="email" placeholder="E-mail">
                                            <input type="hidden" name="property" value="Property 123">
                                            <textarea name="message" placeholder="Повідомлення"></textarea>
                                            <input type="submit" class="submit-alt pull-right" value="надіслати">
                                            <p class="return-msg"></p>
                                        </form>
                                    </div>
                                </div><!-- .row -->
                          	</div><!-- .section-content -->
                      	</section>
                        
                        <section id="recent-properties-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                	<h1>Схожі пропозиції</h1>
                                </div>
                                <div class="onscroll-animate" data-animation="fadeInUp">
                                    <div id="recent_prop_slider" class="pagination-alt">
                                    	<article>
                                            <div class="post-preview-alt">
                                                <a href="#">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="images/listings/9.jpg">
                                                            </div>
                                                            <div class="post-preview-label2">Продаж</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">350 000 грн.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="#">335 W 2nd Ave, California</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">250 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">3 кімнати</a><br>
                                                        <a href="#">2 санвузла</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="post-preview-alt">
                                                <a href="#">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="images/listings/9.jpg">
                                                            </div>
                                                            <div class="post-preview-label2">Продаж</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">350 000 грн.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="#">335 W 2nd Ave, California</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">250 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">3 кімнати</a><br>
                                                        <a href="#">2 санвузла</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="post-preview-alt">
                                                <a href="#">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="images/listings/9.jpg">
                                                            </div>
                                                            <div class="post-preview-label2">Продаж</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">350 000 грн.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="#">335 W 2nd Ave, California</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">250 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">3 кімнати</a><br>
                                                        <a href="#">2 санвузла</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="post-preview-alt">
                                                <a href="#">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="images/listings/8.jpg">
                                                            </div>
                                                            <div class="post-preview-label2">For Sale</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">$350.000</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="#">335 W 2nd Ave, California</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a><br>
                                                        <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="post-preview-alt">
                                                <a href="#">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="images/listings/9.jpg">
                                                            </div>
                                                            <div class="post-preview-label2">Продаж</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">350 000 грн.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="#">335 W 2nd Ave, California</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">250 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">3 кімнати</a><br>
                                                        <a href="#">2 санвузла</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article>
                                            <div class="post-preview-alt">
                                                <a href="#">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="images/listings/9.jpg">
                                                            </div>
                                                            <div class="post-preview-label2">Продаж</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">350 000 грн.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="#">335 W 2nd Ave, California</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">250 кв.м.</a> <span class="delimiter-inline-alt"></span> <a href="#">3 кімнати</a><br>
                                                        <a href="#">2 санвузла</a> <span class="delimiter-inline-alt"></span> <a href="#">1 балкон</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div><!-- #recent_prop_slider -->
                                </div><!-- .onscroll-animate -->
                          	</div><!-- .section-content -->
                      	</section>
                        
                        <div class="margin-30 visible-sm-block visible-xs-block"></div>
                    </div><!-- .col-md-9 -->
                    <div class="col-md-3 sidebar">
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
                        
                        <section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Категорії</h1>
                                </div>
                                <ul class="list-values">
                                    <li class="onscroll-animate" data-animation="fadeInRight">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Квартир</div>
                                                <div class="list-values-value">15</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="300">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Будинків</div>
                                                <div class="list-values-value">25</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="400">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Офісів</div>
                                                <div class="list-values-value">44</div>
                                            </article>
                                        </a>
                                    </li>
                                    <li class="onscroll-animate" data-animation="fadeInRight" data-delay="500">
                                        <a href="blog_one_column.html">
                                            <article>
                                                <div class="list-values-content">Земельних ділянок</div>
                                                <div class="list-values-value">12</div>
                                            </article>
                                        </a>
                                    </li>
                              	</ul>
                          	</div><!-- .section-content -->
                      	</section>
                        
                        <!-- <section>
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
                      	</section> -->
                        
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
                                    <h1>Ми в мережі</h1>
                                </div>
                                <p>Тут може бути віджет соціальних мереж</p>
                            </div>
                        </section>

                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
@stop

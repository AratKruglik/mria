@extends('layouts.layout')

@section('meta_d')@stop

@section('meta_k')@stop

@section('title') {{ $item->name }} @stop

@section('map')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
    function initialize() {
      var geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(-34.397, 150.644);
      var mapOptions = { zoom: 14,  center: latlng }
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      codeAddress(geocoder, map);
    }
    function codeAddress(geocoder, map) {
      var address = "Ukraine, Kyiv";
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
          });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

@stop

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
                                                        <h3>{{ $item->address }}</h3>
                                                        <p>
                                                            @if(isset($type))
                                                           {{ $type->name }}
                                                            <span class="delimiter-inline-alt"></span> 
                                                            @endif
                                                            <a href="#">{{ $item->area }} {{ $item->area_type }}</a> 
                                                            <span class="delimiter-inline-alt"></span> 
                                                            <a href="#">кімнат: {{ $item->rooms }}</a>
                                                        </p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            {{ $item->price }} {{ $item->currency }} <span class="small">{{ $item->pay_type }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div @if($item->case_type !== 'оренда') class="label-color2" @else class="label-color" @endif>
                                                    <h3 class="no-margin">{{ $item->case_type }}</h3>
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
                                                        <h3>{{ $item->address }}</h3>
                                                        <p>
                                                            @if(isset($type))
                                                            <a href="#">{{ $type->name }}</a> 
                                                            <span class="delimiter-inline-alt"></span> 
                                                            @endif
                                                            <a href="#">{{ $item->area }} {{ $item->area_type }}</a> 
                                                            <span class="delimiter-inline-alt"></span> 
                                                            <a href="#">кімнат: {{ $item->rooms }}</a>
                                                        </p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            {{ $item->price }} {{ $item->currency }} <span class="small">{{ $item->pay_type }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div @if($item->case_type !== 'оренда') class="label-color2" @else class="label-color" @endif>
                                                    <h3 class="no-margin">{{ $item->case_type }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
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
                                	<h1>Мапа</h1>
                                    <h4>Місцезнаходження на мапі</h4>
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
                        
                        @if(isset($agent))
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
                                                        <img alt="agent" src="{{ $agent->photo }}">
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
                                    				<h5 class="profile-heading">{{ $agent->name }} {{ $agent->lastname }}</h5>
                                                    <p>{{ $agent->stuff }}</p>
                                                    <p>
                                                        <i class="fa fa-phone"></i> {{ $agent->phone }}<br>
                                                        <i class="fa fa-envelope-alt"></i> {{ $agent->email }}<br>
                                                    </p>
                                                    <a href="/agents/{{ $agent->id }}" class="read-more-link-alt"><span class="text-smaller">Детальніше</span></a>
                                                </div>
                                          	</div><!-- .row -->
                                      	</div><!-- .profile -->
                                    </div><!-- .col-md-8 -->
                                    <div class="col-md-4 onscroll-animate" data-animation="fadeInUp">
                                    	<h3 class="section-small-heading">Надішліть повідомлення</h3>
                                        <form class="form-contact" id="contact-form-agent" action="/post/messages" method="post" data-all-fields-required-msg="Бу" data-ajax-fail-msg="Будь-ласка, заповніт всі поля!" data-success-msg="Дякуємо! Ваше повідомлення надіслоно.">
                                            <input type="text" name="name" placeholder="Імя">
                                            <input type="text" name="email" placeholder="E-mail">
                                            <input type="hidden" name="property" value="Пропозиція {{ $item->id }}">
                                            <textarea name="message" placeholder="Повідомлення"></textarea>
                                            <input type="submit" class="submit-alt pull-right" value="надіслати">
                                            <p class="return-msg"></p>
                                        </form>
                                    </div>
                                </div><!-- .row -->
                          	</div><!-- .section-content -->
                      	</section>
                        @endif
                        
                        @if(isset($same_objects))
                        <section id="recent-properties-section">
                            <div class="section-content">
                                <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                	<h1>Схожі пропозиції</h1>
                                </div>
                                <div class="onscroll-animate" data-animation="fadeInUp">
                                    <div id="recent_prop_slider" class="pagination-alt">
                                        @foreach($same_objects as $same)
                                    	<article>
                                            <div class="post-preview-alt">
                                                <a href="/catalog/item/{{ $same->id }}">
                                                    <section>
                                                        <div class="post-preview-img">
                                                            <div class="post-preview-img-inner">
                                                                <img alt="post img" src="{{ $same->cover }}">
                                                            </div>
                                                            <div @if($same->case_type !== 'оренда') class="post-preview-label2" @else class="post-preview-label" @endif>{{ $same->case_type }}</div>
                                                            <div class="post-img-detail">
                                                                <div class="post-img-detail-wrapper">
                                                                    <div class="post-img-detail-content">
                                                                        <div class="post-img-detail-box">{{ $same->price }} {{ $same->currency }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </a>
                                                <div class="post-preview-content">
                                                    <h2 class="post-preview-heading"><a href="/catalog/item/{{ $same->id }}">{{ $same->name }}</a></h2>
                                                    <div class="post-preview-detail">
                                                        <a href="#">{{ $same->area }} {{ $same->area_type }}</a> <span class="delimiter-inline-alt"></span> <a href="#">кімнат: {{ $same->rooms }}</a><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        @endforeach
                                </div><!-- .onscroll-animate -->
                          	</div><!-- .section-content -->
                      	</section>
                        @endif
                        
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
                        
                        {{ Widget::porperySide() }}
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

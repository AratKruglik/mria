@extends('layouts.layout')
@section('title') Контакти @stop
@section('content')
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Зв'яжіться з нами</h1>
                    <h4>Ми чекаємо ваших запитань стосовно пропозицій продажу, оренди нерухомості!</h4>
        		</div>
                <div class="row">
                	<div class="col-md-4 onscroll-animate">
                    	<div class="clearfix">
                    		<img class="img-inline logo-style3" alt="hometastic" src="/images/logo3.png"> <span class="heading-small-inline">АН "Мрія"</span>
                        </div>
                        <hr>
                        @foreach($configs as $config)
                        <h6 class="heading-small-inline">Про нас</h6>
                        <p>{{ $config->about }}</p>
                        
                        <div class="margin-10"></div>
                        <div class="text-bigger">
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">{{ $config->phone }}</div>
                                </div>
                            </div>
                             @if($config->phone2 !== "")
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-mobile-phone text-big"></i></div>
                                    <div class="icon-opening-content">{{ $config->phone2 }}</div>
                                </div>
                            </div>
                            @endif
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-envelope-alt"></i></div>
                                    <div class="icon-opening-content">
                                       {{ $config->email }}
                                    </div>
                                    <div class="icon-opening"><i class="fa fa-globe"></i></div>
                                    <div class="icon-opening-content">{{ $config->address }}</div>
                                </div>
                            </div>
                            <p>
                                <div class="social-container">
                                    <a href="{{ $config->facebook }}"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="social-container">
                                    <a href="{{ $config->twitter }}"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="social-container">
                                    <a href="{{ $config->vk }}"><i class="fa fa-vk"></i></a>
                                </div>
                                <div class="social-container">
                                    <a href="{{ $config->google }}"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </p>
                        </div>
                        <div class="margin-40"></div>
                    @endforeach
                    </div><!-- .col-md-4 -->
                    <div class="col-md-8 onscroll-animate" data-delay="400">
                    	<form class="form-contact-full" id="contact-form" action="#" method="post" data-name-not-set-msg="Name is required" data-message-not-set-msg="Message is required" data-email-not-set-msg="Email is required" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully sent.">
                            <div class="row">
                            	<div class="col-xs-6">
                                	Ваше ім'я
                                	<input type="text" name="name" placeholder="Введіть тут">
                                </div>
                                <div class="col-xs-6">
                                	Email
                                	<input type="text" name="email" placeholder="Ваш Email">
                                   	Номер телефона
                                	<input type="text" name="phone" placeholder="+38">
                                </div>
                            </div>
                            Текст повідомлення
                            <textarea name="message" placeholder="Введіть тут"></textarea>
                            <p class="return-msg"></p>
                            <div class="text-right">
                                <div class="form-contact-full-submit">
                                    <input type="submit" value="Надіслати">
                                </div>
                          	</div>
                        </form>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
    
@stop

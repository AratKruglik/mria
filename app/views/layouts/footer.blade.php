<footer id="footer-section">
    	<a href="#header-section" class="scroll-to" id="to-top"></a>
    	<div class="container footer-info">
        @foreach($configs as $config)
        	<div class="row">
            	<div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6 footer-column onscroll-animate">
                            <h4><img alt="Hometastic" src="/images/logo.png"></h4>
                            <p>{{ $config->about }}</p>
                            <a href="/contacts" class="read-more-link-alt">детальніше</a>
                        </div>
                        @if(isset($footerArticles))
                        <div class="col-sm-6 footer-column onscroll-animate" data-delay="400">
                            <h4>Останні новини</h4>
                            <ul class="list-links-simple">
                            @foreach($footerArticles as $fartices)
                                <li><a href="/news/view/{{ $fartices->id }}">{{ $fartices->name }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6 footer-column font-normal onscroll-animate" data-delay="600">
                            <h4>Контакти</h4>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">{{ $config->phone }}</div>
                                    <div class="icon-opening"><i class="fa fa-mobile-phone text-big"></i></div>
                                    <div class="icon-opening-content">{{ $config->phone2 }}</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-envelope"></i></div>
                                    <div class="icon-opening-content">{{ $config->email }}</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-globe"></i></div>
                                    <div class="icon-opening-content">{{ $config->address }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 footer-column onscroll-animate" data-delay="800">
                            <h4>Підписка</h4>
                            <p>Підписуйтесь на оновлення! Будьте в курсі нових пропозицій!</p>
                            <form class="form-subscribe" id="rss-subscribe" action="№" method="post" data-email-not-set-msg="Будь-ласка, введить email!" data-ajax-fail-msg="Невдало." data-success-msg="Підписку успішно оформлено">
                                <input type="text" name="email" placeholder="ваш email...">
                                <div class="text-right">
                                	<input type="submit" value="підписатись">
                                </div>
                                <p class="return-msg"></p>
                            </form>
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
            </div><!-- .row -->
        </div><!-- .container -->

        {{-- Widget::FooterMenu() --}}
        
        <div class="site-info">
        	<div class="container">
                <div class="row">
                    <div class="col-xs-6 onscroll-animate" data-animation="fadeInLeft">
                        <p>2015 Всі права захищені. Сайт створено <a title="Arat's Webstudio" data-toggle="tooltip" href="http://arat-web.com.ua"><em>Arat's WebStudio</em></a></p>
                    </div>
                    <div class="col-xs-6 text-right onscroll-animate" data-animation="fadeInRight">
                    	<div class="socials-wrapper">
                            <div class="social-round-container">
                                <a href="{{ $config->facebook }}"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="social-round-container">
                                <a href="{{ $config->twitter }}"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="social-round-container">
                                <a href="{{ $config->google }}"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
                @endforeach
            </div><!-- .container -->
        </div><!-- .site-info -->
    </footer>
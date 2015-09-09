@extends('layouts.layout')
@section('title') Раді вітати! @stop
@section('meta_d') Ключове описання @stop
@section('meta_k') Ключове описання @stop
@section('content')
<section>
        <div id="main-slider">
            <div class="slide-1 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6 pull-right">
                            <div class="slide-box"> 
                            {{-- class="arrow-left" --}}
                                <h2>Раді вітати!</h2>
                                <p>Ми впевнені, що з нашою допомогою Ви обов'язково здійсните свою Мрію: купите, або продасте будинок, дачу, земельну ділянку, іншу нерухомість. Ми в цьому із задоволенням Вам допоможемо!</p>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="/catalog" class="read-more-link-alt">Детальніше</a>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-1 -->
            <div class="slide-3 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6 pull-right">
                            <div class="slide-box-alt">
                            {{-- class="arrow-right" --}}
                                <h2>Зручний пошук</h2>
                                <p>Використовуйте нашу систему пошуку і підберіть пропозицію з нерухомості саме для Вас! Гнучка система дозволяє тонко підібрати необхідну пропозицію в найшвидший термін. Оберіть необхідне буквально в декілька кроків.</p>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="/catalog" class="read-more-link-alt">Детальніше</a>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-2 -->
            <div class="slide-2 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6 pull-right">
                            <div class="slide-box">
                            {{-- class="arrow-right" --}}
                                <h2>Кваліфікована команда</h2>
                                <p>Наші фахівці підберуть найбільш відповідний варіант, залежно від місця розташування, вартості, площі земельних ділянок, наявних систем комунікацій, особливостей місцевості та ін. А також з нашою допомогою Ви можете надійно і швидко знайти і купити будинок або об'єкт комерційної нерухомості в Броварському районі, Київської області.</p>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="/catalog" class="read-more-link-alt">Детальніше</a>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-3 -->
        </div><!-- .master-slider -->
    </section>
    
	@include('layouts.search')
    
	<!-- <section id="citation-section" class="section-contrast">
    	<div class="bg-image bg-pattern bg-cover parallax-background">
            <div class="section-content onscroll-animate" data-animation="fadeInUp">
            	<p class="citation">“Тут може бути найкрутіший відгук”</p>
            	<p class="citation-author">Albert EINSTEIN</p>
            </div>
       	</div>
    </section> -->
    
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Останні пропозиції</h1>
                    <h4>Нещодавно додані до нашого каталогу пропозиції з нерухомості</h4>
        		</div>
                <div class="row">
                @if(isset($objects))
                @foreach ($objects as $item)
                        <div class="col-md-4 onscroll-animate">
                        <article>
                            <div class="post-preview">
                                <a href="/catalog/item/{{ $item->id }}">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="{{ $item->cover }}">
                                            </div>
                                            <div @if($item->case_type == 'оренда') class="post-preview-label" @else class="post-preview-label2" @endif>{{ $item->case_type }}</div>
                                            @if($item->termins == 1)
                                            <div class="post-preview-label-alt-wrapper">
                                                <div class="post-preview-label-alt">Терміново {{-- <i class="fa fa-star"></i> --}}</div>
                                            </div>
                                            @endif
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">{{ $item->name }}</h2>
                                    <p>{{ str_limit($item->description, $limit = 70, $end = '...') }}</p>
                                    <div class="post-preview-price-container">
                                        <a href="/catalog/item/{{ $item->id }}" class="read-more-link-alt">Детальніше</a>
                                        <p class="listing-price">{{ $item->price }} {{ $item->currency }} <span class="small">{{ $item->pay_type }}</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">{{ $item->area }} {{ $item->area_type }}</a> 
                                        <span class="delimiter-inline-alt"></span> 
                                        <a href="#">{{ $item->rooms }} кімнати</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                @endforeach
                @endif
                </div><!-- .row -->
                <!-- <div class="text-center onscroll-animate">
                    <div class="pagination">
                        <div class="pagination-item pagination-first"><a href="#">First</a></div>
                        <div class="pagination-item"><a href="#">1</a></div>
                        <div class="pagination-item active"><a href="#">2</a></div>
                        <div class="pagination-item"><a href="#">3</a></div>
                        <div class="pagination-item"><a href="#">4</a></div>
                        <div class="pagination-item"><a href="#">5</a></div>
                        <div class="pagination-item pagination-last"><a href="#">Last</a></div>
                    </div>
                </div> -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
    
    <div class="margin-30 visible-lg-block visible-md-block"></div>
    
    

	<section class="section-dark">
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>послуги</h1>
                    <h4>Що ми пропонуємо?</h4>
        		</div>
                <div class="row">
                	<div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-signal"></i>
                                    </div>
                                    <h3>Досвід</h3>
                                    <p>Наш досвід роботи дозволяє допомгти знайти пропозицію саме для вас.</p>
                                    {{-- <div class="read-more-link-container">
                                    	<a href="/about" class="read-more-link">Детальніше</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <h3>Оренда, продаж житла</h3>
                                    <p>Наша база містить широкий вибір будинків, квартир, кімнат для житла або землі.</p>
                                    {{-- <div class="read-more-link-container">
                                    	<a href="/about" class="read-more-link">Детальніше</a>
                                    </div> --}}
                                </div>
                            </div>
                    	</div><!-- .row -->
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-delay="600" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <h3>Офіси</h3>
                                    <p>Шукаєте приміщення для оренди чи купівлі під офіс? Ми маємо відмінні пропозиції!</p>
                                    {{-- <div class="read-more-link-container">
                                    	<a href="/about" class="read-more-link">Детальніше</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="800" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <h3>Широкий вибір</h3>
                                    <p>Скористайтесь пошуком, щоб знайти необхідну саме для вас пропозицію!</p>
                                    {{-- <div class="read-more-link-container">
                                    	<a href="/about" class="read-more-link">Детальніше</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

<!-- 	<section>
    	<div class="bg-buildings">
            <div class="container-big section-content bg-logo">
                <div class="container clearfix">
                    <div class="big-notice onscroll-animate">
                        <h3><span class="text-uppercase"><strong>Home</strong>tastic</span> is a beautifull Template for Real Estate businesses, includes all elements needed to start the job</h3>
                        <div class="onscroll-animate pull-right" data-delay="700" data-animation="flipInY">
                        	<div class="button-container"><a class="button" href="#">Buy The Template</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@stop
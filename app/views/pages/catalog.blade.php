@extends('layouts.layout')

@section('meta_k') erwer @stop
@section('meta_d') dfsdf @stop
@section('title') Каталог об'єктів @stop

@section('content')
    
@include('layouts.search')
    
	<section>
        <div class="section-content">
            <div class="container">
                <div class="section-header onscroll-animate" data-animation="fadeInLeft" id="list">
                    <h1>Каталог нерухомості</h1>
                    <h4>Для вибору пропозиції саме для вас, скористайтесь пошуком</h4>
                </div>
                <div class="row">
                    @if(isset($objects))
                    @foreach ($objects as $item)
                    <div class="col-md-4 onscroll-animate">
                        <article>
                            <div class="post-preview">
                                <a href="/catalog/{{ $item->slug }}">
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
                                        <a href="/catalog/{{ $item->slug }}" class="read-more-link-alt">Детальніше</a>
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
                <div class="text-center onscroll-animate">
                    {{ $objects->links() }}
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
@stop
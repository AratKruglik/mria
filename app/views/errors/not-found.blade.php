@extends('layouts.layout')

@section('title') 404 - не знайдено @stop

@section('content')
<section>
    <div class="section-content">
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1>404 - сторінку не знайдено</h1>
                    <p>Вибачте, сторінка не існує, або тимчасово не працює...</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="/">Повернутись</a>
                    </p>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .section-content -->
</section>
@stop
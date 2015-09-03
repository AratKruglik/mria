@extends('layouts.layout')
 
@section('content')
<div class="jumbotron">
    <div class="container">
        <p>{{ $message }}</p>
 
        @if ($redirect)
        <script type="application/javascript">
            setTimeout(
                function() {
                    location.href = '{{ $redirect }}';
                },
                10000
            );
        </script>
        <p class="like-h">Натисніть <a href="{{ $redirect }}">це посилання</a>, якщо ваш браузер не підтримує автоматичне перенаправлення.</p>
        @endif
    </div>
</div>
@stop
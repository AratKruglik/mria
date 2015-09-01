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
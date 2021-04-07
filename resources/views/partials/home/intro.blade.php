<!-- Intro Section -->
<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src={{asset('img/'.$datalogo->src)}} alt="">
				<div class="" data-bg="">
					<p>Get your freebie template now!</p>
				</div>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($datacarousel as $item)
			<div class="item  hero-item" data-bg="{{asset('img/'.$item->src)}}">
			</div>
			@endforeach
		</div>
</div>
<!-- Intro Section -->

<!-- features section -->
<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  discover the world</h2>{{-- titre du site --}}
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<!-- feature item -->
					@foreach ($lastServB as $item)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$item->titre}}</h2>
							<p>{{Str::limit($item->description, 100)}}</p>
						</div>
						<div class="icon">
							<i class={{$item->icon}}></i>
						</div>
					</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">	
					@foreach ($lastServA as $item)
					<div class="icon-box light">
						<div class="icon">
							<i class={{$item->icon}}></i>
						</div>
						<div class="service-text">
							<h2>{{$item->titre}}</h2>
							<p>{{Str::limit($item->description, 100)}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
</div>
<!-- features section end-->
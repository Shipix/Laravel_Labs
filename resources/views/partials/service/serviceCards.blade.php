<!-- services card section-->
<div class="services-card-section spad" id="serviceCards">
		<div class="container">
			<div class="row">
				@foreach ($lastarticle as $item)
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img" >
							<img src={{asset('img/blog/'.$item->img)}} alt="">
						</div>
						<div class="card-text">
							<h2>{{$item->titre}}</h2>
							<p>{{Str::limit($item->texte, 120)}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

</div>
<!-- services card section end-->
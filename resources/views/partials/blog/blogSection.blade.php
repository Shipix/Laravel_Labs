	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($dataPost as $item)
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<img src={{$item->img}} alt="">
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$item->titre}}</h2>
							<div class="post-meta">
								<a href="">{{$item->categorie_id}}</a>
								<a href="">{{$item->tag}}</a>
								<a href="">commentaires {{$item->commentaire}}</a>
							</div>
							<p>{{$item->texte}}</p>
							<a href='/Blog-post' class="read-more">Read More</a>
						</div>
					</div>
					@endforeach

					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($datacategorie as $item)
							<li><a href="#">{{$item->nom}}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($datatag as $item)
							<li><a href="">{{$item->hashtag}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->
<!-- Contact section -->
<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$datacontact->titre}}</h2>
					</div>
					<p>{{$datacontact->texte}}</p>
					<h3 class="mt60">{{$datacontact->titre_info}}</h3>
					<p class="con-item">{{$datacontact->ville}}<br>{{$datacontact->adresse}}</p>
					<p class="con-item">{{$datacontact->tel}}</p>
					<p class="con-item">{{$datacontact->mail}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</div>
<!-- Contact section end-->
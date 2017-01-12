@include('def')
@include('common.header')
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-6 about-grid-left">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/15.jpg" alt="" class="img-responsive" />
							<figcaption>
								<h2>Shipping <span> Alaska</span></h2>
								<div>
									<p>Quo voluptas nulla pariatur.</p>
									<p>Neque porro quisquam est, dolorem.</p>
									<p>Aliquid ex ea consequatur.</p>
								</div>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
				</div>
				<div class="col-md-6 about-grid-right">
					<h3>Nemo enim ipsam voluptatem quia voluptas sit</h3>
					<p class="great">No one rejects, dislikes, or 
						avoids pleasure itself, because it is pleasure.I will give you a complete account 
							of the system, and expound the actual teachings of the great explorer of the 
							truth, the master-builder of human happiness.</p>
					<p>But I must explain to you how all this mistaken idea of denouncing 
						pleasure and praising pain was born and I will give you a complete account 
						of the system, and expound the actual teachings of the great explorer of the 
						truth, the master-builder of human happiness. No one rejects, dislikes, or 
						avoids pleasure itself, because it is pleasure.</p>
					<div class="social_icons social_icons1">
						<ul>
							<li><a href="#" class="p"></a></li>
							<li><a href="#" class="facebook"></a></li>
							<li><a href="#" class="g"></a></li>
							<li><a href="#" class="instagram"></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="my-trip">
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="my-trip-grids">
									<div class="col-xs-4 my-trip-left">
										<h3>About <span>My</span> Trip. (Alaska)</h3>
									</div>
									<div class="col-xs-8 my-trip-right">
										<div class="my-trip-rightl">
											<img src="images/20.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="my-trip-rightr">
											<p>To take a trivial example, which of us ever undertakes 
												laborious physical exercise, except to obtain some advantage 
												from it? But who has any right to find fault with a man who chooses 
												to enjoy a pleasure that has no annoying consequences.
												<span>Andrew Rich</span></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="my-trip-grids">
									<div class="col-xs-4 my-trip-left">
										<h3>About <span>My</span> Trip. (Alaska)</h3>
									</div>
									<div class="col-xs-8 my-trip-right">
										<div class="my-trip-rightl">
											<img src="images/22.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="my-trip-rightr">
											<p>To take a trivial example, which of us ever undertakes 
												laborious physical exercise, except to obtain some advantage 
												from it? But who has any right to find fault with a man who chooses 
												to enjoy a pleasure that has no annoying consequences.
												<span>Laura James</span></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="my-trip-grids">
									<div class="col-xs-4 my-trip-left">
										<h3>About <span>My</span> Trip. (Alaska)</h3>
									</div>
									<div class="col-xs-8 my-trip-right">
										<div class="my-trip-rightl">
											<img src="images/21.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="my-trip-rightr">
											<p>To take a trivial example, which of us ever undertakes 
												laborious physical exercise, except to obtain some advantage 
												from it? But who has any right to find fault with a man who chooses 
												to enjoy a pleasure that has no annoying consequences.
												<span>Micheal Smith</span></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="js/jquery.wmuSlider.js"></script> 
					  <script>
						$('.example1').wmuSlider();         
					 </script> 
			</div>
		</div>
	</div>
<!-- //about -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid">
					<div class="col-md-8 testimonials-grd">
						<div class="testimonials-grid1">
							<h4>Laura James <span>Photographer</span></h4>
							<p>Voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum 
								fugiat quo voluptas nulla pariatur</p>
						</div>
					</div>
					<div class="col-md-4 testimonials-grd-right">
						<img src="images/22.jpg" alt=" " class="img-responsive">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 testimonials-grid">
					<div class="col-md-4 testimonials-grd-right">
						<img src="images/21.jpg" alt=" " class="img-responsive">
					</div>
					<div class="col-md-8 testimonials-grd">
						<div class="testimonials-grid1 testimonials-grid1-second">
							<h4>Micheal Smith <span>Photographer</span></h4>
							<p>Voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum 
								fugiat quo voluptas nulla pariatur</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->
 @include('common.footer')
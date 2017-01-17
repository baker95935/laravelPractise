@include('def')
@include('common.header')
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-6 about-grid-left">
					<div class="grid">
						<figure class="effect-julia">
							<img src="{{ asset('/images/15.jpg') }}" alt="" class="img-responsive" />
							<figcaption>
								<h2>关于 <span> 我们</span></h2>
								<div>
									<p>枣庄本土化的资源优势++</p>
									<p>网络专业化深耕网络多年</p>
									<p>人员全国化全国的枣庄人都关注</p>
								</div>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
				</div>
				<div class="col-md-6 about-grid-right">
					<h3>关于本站</h3>
					<p class="great">本站基于laravel5.0(国外最流行的PHP框架),站长练手的习作，同时对于枣庄旅游的前景表示乐观，
					基于一颗爱好网络的心，基于一个对家乡热爱的情感，会持续更新下去。</p>
					<p>站长，枣庄峄城人，目前北漂在首都。QQ群中有一帮爱好网络的朋友，欢迎热爱聊天的枣庄人加入我们
					，加入我们的QQ群，我们走的是长线，走的是朋友，群里各行业牛人众多，欢迎枣庄网友加入。
					QQ群号：14839966，<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=004472c67a72be87652a5b326ba4a9d75353b9c465785fe784abbbc8301bb78f">
					<img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="枣庄论坛网友交流群①" title="枣庄论坛网友交流群①"></a></p>
					 
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="my-trip">
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
					
						@foreach($myTeamList as $key=>$team)
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="my-trip-grids">
									<div class="col-xs-4 my-trip-left">
										<h3>关于 <span>我的</span>团队</h3>
									</div>
									<div class="col-xs-8 my-trip-right">
										<div class="my-trip-rightl">
											<img src="{{$team->coverPic}}" alt=" " class="img-responsive" />
										</div>
										<div class="my-trip-rightr">
											<p>{{$team->body}}
												<span>{{$team->title}}</span></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
		 			@endforeach
					</div>
				</div>
					<script src="{{ asset('/js/jquery.wmuSlider.js') }}"></script> 
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
			<h3>管理核心</h3>
			<div class="testimonials-grids">
			
				<div class="col-md-6 testimonials-grid">
					<div class="col-md-8 testimonials-grd">
						<div class="testimonials-grid1">
							<h4>{{$teamLeaderOne->title}}<span>群管理员</span></h4>
							<p>{{$teamLeaderOne->body}}</p>
						</div>
					</div>
					<div class="col-md-4 testimonials-grd-right">
						<img src="{{$teamLeaderOne->coverPic}}" alt=" " class="img-responsive">
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="col-md-6 testimonials-grid">
					<div class="col-md-4 testimonials-grd-right">
						<img src="{{$teamLeaderTwo->coverPic}}" alt=" " class="img-responsive">
					</div>
					<div class="col-md-8 testimonials-grd">
						<div class="testimonials-grid1 testimonials-grid1-second">
							<h4>{{$teamLeaderTwo->title}}<span>群管理员</span></h4>
							<p>{{$teamLeaderTwo->body}}</p>
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
@include('def')
@include('common.header')
<!-- banner-bottom-position -->
	<div class="banner-bottom-position">
		<div class="col-md-6 banner-bottom-position-grid">
			<div class="banner-bottom-position-grid-left">
				<img src="{{$lastestStrategy->coverPic}}" alt=" " class="img-responsive" />
				<div class="banner-bottom-position-grid-left-pos">
					<h4>{{$lastestStrategy->title}}</h4>
				</div>
			</div>
		</div>
		<div class="col-md-6 banner-bottom-position-gridr">
			<h3>01.</h3>
			<p>{{$lastestStrategy->body}}</p>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom-position -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
			
				<div class="col-md-4 banner-bottom-grid">
					<img src="{{$aboutUsOne->coverPic}}" alt=" " class="img-responsive" />
					<div class="social_icons social_icons_sub">
						<p>{{$aboutUsOne->title}}</p>
					</div>
					<div class="banner-bottom-grid1">
						<h3>{{$aboutUsOne->title}}</h3>
						<p>{{$aboutUsOne->body}}</p>
					</div>
				</div>
				
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid1 banner-bottom-grid1-sub">
						<h3>{{$aboutUsTwo->title}}</h3>
						<p>{{$aboutUsTwo->body}}</p>
					</div>
					<img src="{{$aboutUsTwo->coverPic}}" alt=" " class="img-responsive" />
					<div class="social_icons social_icons_sub1">
						<p>{{$aboutUsTwo->title}}</p>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
				@foreach($blogList as $key=>$blog)
					@if($key==0)
					<div class="banner-bottom-grid-box">
						<div class="banner-bottom-grid-box1">
					@endif
					@if($key==1)	
					<div class="banner-bottom-grid-box banner-bottom-grid-boxs">
						<div class="banner-bottom-grid-box1">
				 	@endif
				 	@if($key==2)
					<div class="banner-bottom-grid-box banner-bottom-grid-boxs1">
						<div class="banner-bottom-grid-box1 banner-bottom-grid-box1-sub">
					@endif
						<h1>{{$blog->title}}</h1>
							<p>{{$blog->body}}</p>
						</div>
					</div>
				@endforeach
				 
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="container">	
			<div class="banner-bottom1-grids">
				<div class="col-md-8 banner-bottom1-grid-left">
					<h3>关于我们</h3>
					<p>热爱网络的一帮人，对于枣庄的旅游甚是喜欢，热爱旅游，爱分享</p>
				</div>
				<div class="col-md-4 banner-bottom1-grid-right">
					<div class="more">
						<a class="btn effect6" href="/index/about/">查看更多</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom1 -->
<!-- slider -->
	<div class="slider">
		<div class="container">
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<div class="sliderfig-grids">
							<div class="sliderfig-grid">
								<img src="{{asset('/images/5.jpg')}}" alt=" " class="img-responsive" />
							</div>
						</div>
					</li>
					<li>
						<div class="sliderfig-grids">
							<div class="sliderfig-grid">
								<img src="{{asset('/images/6.jpg')}}" alt=" " class="img-responsive" />
							</div>
						</div>
					</li>
					<li>
						<div class="sliderfig-grids">
							<div class="sliderfig-grid">
								<img src="{{asset('/images/8.jpg')}}" alt=" " class="img-responsive" />
							</div>
						</div>
					</li>
					<li>
						<div class="sliderfig-grids">
							<div class="sliderfig-grid">
								<img src="{{asset('/images/7.jpg')}}" alt=" " class="img-responsive" />
							</div>
						</div>
					</li>
					</ul>
<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:3
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			});
	</script>
	<script type="text/javascript" src="{{asset('/js/jquery.flexisel.js')}}"></script>
			</div>
		</div>
	</div>
<!-- //slider -->
<!-- banner-bottom-position -->
	<div class="banner-bottom-position">
		<div class="col-md-7 banner-bottom-position-gridr right">
			<h3>02.</h3>
			<p>{{$lastestNote->body}}</p>
		</div>
		<div class="col-md-5 banner-bottom-position-grid">
			<div class="banner-bottom-position-grid-left Voluptates">
				<img src="{{$lastestNote->coverPic}}" alt=" " class="img-responsive" />
				<div class="banner-bottom-position-grid-left-pos repudiandae">
					<h4>{{$lastestNote->title}}</h4>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom-position -->

@include('common.footer')
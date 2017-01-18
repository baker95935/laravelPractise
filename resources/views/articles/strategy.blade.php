 
@include('def')
@include('common.header')	 
<!-- features -->
	<div class="features">
		<div class="container">
			<h3>枣庄特色景点</h3>
			<div class="services-grids">
				<div class="col-md-4 services-grid">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>台儿庄古城</h4>
						<p>台儿庄古城位于山东枣庄，古河道古码头，是一座东方水城，我国第</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-grid">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>微山湖红荷湿地</h4>
						<p>环境很好，空气很新鲜，湿地不错，夏季荷花很漂亮，服务也很完善...</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-grid">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-cd" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>冠世榴园</h4>
						<p>植被茂盛，空气质量不错。景区环境很好，景区较幽静，适合家人朋.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="featured-services">
		<div class="container">
			<h3>最新枣庄旅游攻略</h3>
			<div class="featured-services-grids">
			@foreach($lastestStrategy as $key=>$strategy)
				<div class="col-md-3 featured-services-grid">
					<div class="featured-services-grd">
						@if($key==0)<span class="glyphicon glyphicon-star" aria-hidden="true"></span>@endif
						@if($key==1)<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>@endif
						@if($key==2)<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>@endif
						@if($key==3)<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>@endif
						<h4>{{$strategy->title}}</h4>
						<p>{{$strategy->body}}</p>
						<div class="more m2">
							<a class="btn effect6" href="/article/{{$strategy->id}}">查看详情</a>
						</div>
					</div>
				</div>
			@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="sevices-list">
		<div class="container">
			<h3>攻略列表</h3>
			<div class="sevices-list-grids">
				<div class="col-md-4 sevices-list-grid">
					<ul>
						@foreach($strategyLeftList as $key=>$note)
						<li><a href="/articles/show/{{$note->id}}">{{$note->title}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-4 sevices-list-grid">
					<ul>
						@foreach($strategyMiddleList as $key=>$note)
						<li><a href="/articles/show/{{$note->id}}">{{$note->title}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-4 sevices-list-grid">
					<ul>
						@foreach($strategyRightList as $key=>$note)
						<li><a href="/articles/show/{{$note->id}}">{{$note->title}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //features -->
 @include('common.footer')
@include('def')
@include('common.header')	 
<!-- features -->
	<div class="features">
		<div class="container">
			<h3>枣庄特色美食</h3>
			<div class="services-grids">
				<div class="col-md-4 services-grid">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>枣庄辣子鸡</h4>
						<p>辣子鸡为颇具特色的小吃，鲜、辣、香。色艳味重。烹炒鸡肉多以本地公鸡为佳，其中最以老公鸡和小公鸡最为优选。吃辣子鸡喜好也有所不同，有人爱吃老公鸡，因为老公鸡有嚼劲儿，一年以上的老公鸡最合意，</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-grid">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>枣庄菜煎饼</h4>
						<p>原料采用小麦，用石磨或机器磨成全麦面粉，摊薄烙制，然后折叠为两层或两块煎饼放在一起。煎饼中央夹上各种菜丁，如白菜、荠菜、韭菜、胡萝卜丝、土豆丝、粉条、豆腐等，加油、盐、辣椒面等作料</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-grid">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-cd" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>枣庄山亭羊肉汤</h4>
						<p>羊肉汤中华传统经典名吃，在全国各地均有各具特色的地方名吃。主要将羊骨头一起投入大锅里熬汤，再将切成砣的新鲜羊肉与清洗干净的羊杂一起投入汤锅中煮。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="featured-services">
		<div class="container">
			<h3>最新旅游日记</h3>
			<div class="featured-services-grids">
			
			@foreach($lastestNote as $key=>$note)
				<div class="col-md-3 featured-services-grid">
					<div class="featured-services-grd">
						@if($key==0)<span class="glyphicon glyphicon-star" aria-hidden="true"></span>@endif
						@if($key==1)<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>@endif
						@if($key==2)<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>@endif
						@if($key==3)<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>@endif
						
						<h4>{{$note->title}}</h4>
						<p>{{$note->body}}</p>
						<div class="more m2">
							<a class="btn effect6" href="/articles/show/{{$note->id}}">Learn More</a>
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
			<h3>游记列表</h3>
			<div class="sevices-list-grids">
				<div class="col-md-4 sevices-list-grid">
					<ul>
						@foreach($noteLeftList as $key=>$note)
						<li><a href="/articles/show/{{$note->id}}">{{$note->title}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-4 sevices-list-grid">
					<ul>
						@foreach($noteMiddleList as $key=>$note)
						<li><a href="/articles/show/{{$note->id}}">{{$note->title}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-4 sevices-list-grid">
					<ul>
						@foreach($noteRightList as $key=>$note)
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
@include('def')
@include('common.header')
<!-- blog -->
	<div class="blog">
		<div class="container">
			<h3>博客</h3>
			
			@foreach ($blogList as $key=>$blog)
			@if ($key%2 == 0)
			<div class="blog-grids">
			@endif
				<div class="col-md-6 blog-grid">
					<div class="col-xs-4 blog-grid-left">
						<a href="/article/{{$blog->id}}"><img src="{{$blog->coverPic}}" width="220px" height="180px" alt=" " class="img-responsive" /></a>
					</div> 
					<div class="col-xs-8 blog-grid-right">
						<a href="/article/{{$blog->id}}">{{$blog->title}}</a>
						<h4>{{$blog->created_at}}</h4>
						<p>{{$blog->body}}</p>
					</div>
					<div class="clearfix"> </div>
					<div class="more m1">
						<a class="btn effect6" href="/article/{{$blog->id}}">Learn More</a>
					</div>
				</div>
			@if($key%2 == 1)
			<div class="clearfix"> </div>
			</div>
		    @endif 
			@endforeach
			
			<nav class="paging">
			<?php echo $blogList->render(); ?>
			</nav>
		</div>
	</div>
<!-- //blog -->
 @include('common.footer')
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner_top">
				<div class="banner_top_left">
					<p>我正在去枣庄旅游的路上</p>
				</div>
				<div class="banner_top_right">
					<form>
						<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
						<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav cl-effect-14">
						<li><a href="/" @if($nav =='index') class="active" @endif>首页</a></li>
						<li><a href="/index/about" @if($nav =='about') class="active" @endif>关于</a></li>
						<li><a href="/articles/strategy" @if($nav =='strategy') class="active" @endif>攻略</a></li>
						<li><a href="/articles/note" @if($nav =='note') class="active" @endif>游记</a></li>
						<li><a href="/image" @if($nav =='image') class="active" @endif>图集</a></li>
						<li><a href="/articles/blog" @if($nav =='blog') class="active" @endif>博客</a></li>
						<li><a href="#contact" class="scroll">联系</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->	
				
			</nav>
			<div class="logo">
				<a>你的旅行<span>台儿庄古城，微山湖湿地，冠世榴园，抱犊崮国家森林公园，台儿庄大战纪念馆</span></a>
			</div>
			<div class="dummy_text">
				<p>很多事情就像是旅行一样，当你做出决定并迈出第一步的时候，最困难的那部分其实就已经完成了。</p>
			</div>
 
		</div>
	</div>
<!-- //banner -->
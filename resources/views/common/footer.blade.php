<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<h3>联系我们</h3>
			<div class="col-md-4 contact-grid">
				<i class="glyphicon glyphicon-home" aria-hidden="true"></i>
				<h4>地点</h4>
				<p>台儿庄古城<span>中国枣庄</span></p>
			</div>
			<div class="col-md-4 contact-grid">
				<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
				<h4>Mail</h4>
				<a href="mailto:baker95935@qq.com">baker95935@qq.com</a>
			</div>
			<div class="col-md-4 contact-grid">
				<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
				<h4>QQ群</h4>
				<p>14839966</p>
			</div>
			<div class="clearfix"> </div>
			<!-- footer -->
			<div class="footer-copy">
				<p>{{$settings->copyRights}} {{$settings->icpNo}}</p>
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script src="{{ asset('/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>


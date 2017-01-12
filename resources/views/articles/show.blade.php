@include('def')
@include('common.header')	 
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content">
					<h3>Lorem Ipsum is simply dummy text</h3>
					<img class="img-responsive" src="images/banner1.jpg" alt=" " />
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="artical-links">
					<ul>
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>September 27,2015</li>
						<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>admin</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>No comments</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>View posts</a></li>
						<li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>permalink</li>
					</ul>
				</div>
				<div class="comment-grid-top">
					<h3>Responses</h3>
					<div class="comments-top-top">
						<div class="top-comment-left">
							<a href="#"><img class="img-responsive" src="images/co.png" alt=""></a>
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span class="left-at"><a href="#">Admin</a></span></li>
								<li><span class="right-at">September 29, 2015 at 10.30am</span></li>
								<li><a class="reply" href="#">Reply</a></li>
							</ul>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="comments-top-top top-grid-comment">
						<div class="top-comment-left">
							<a href="#"><img class="img-responsive" src="images/co.png" alt=""></a>
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span class="left-at"><a href="#">Admin</a></li>
								<li><span class="right-at">September 31, 2015 at 10.30am</span></li>
								<li><a class="reply" href="#">Reply</a></li>
							</ul>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>			
				<div class="artical-commentbox">
					<h3>leave a comment</h3>
					<div class="table-form">
						<form>
							<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" value="Phone number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone number';}">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>	
							<input type="submit" value="Send">
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
<!-- single -->
@include('common.footer')
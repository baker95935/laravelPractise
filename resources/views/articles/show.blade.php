@include('def')
@include('common.header')	 
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content">
					<h3>{{$article->title}}</h3>
					<!-- <img class="img-responsive" src="{{ asset('/images/banner1.jpg') }}" alt=" " /> -->
					<p>{{$article->body}}</p>
				</div>
				<div class="artical-links">
					<ul>
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>{{$article->created_at}}</li>
						<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>admin</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>{{$commentsCount}}评论数</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>浏览量</a></li>
						<li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>permalink</li>
					</ul>
				</div>
				@if(!empty($comments))
				<div class="comment-grid-top">
					<h3>评论</h3>
					@foreach($comments as $key=>$comment)
					<div class="comments-top-top">
						<div class="top-comment-left">
							<a ><img class="img-responsive" src="{{ asset('/images/co.png') }}" alt=""></a>
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span class="left-at"><a   id="nicknameA" data="{{$comment->nickname}}">{{$comment->nickname}}</a></span></li>
								<li><span class="right-at">{{$comment->created_at}}</span></li>
								<li><a class="reply" href="#new" onclick="reply(this);">Reply</a></li>
							</ul>
						<p >{{$comment->content}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					@endforeach
				</div>
				@endif
				<br>			
				<div class="artical-commentbox">
					<h3>留言</h3>
					<div class="table-form" id="new">
						<form action="{{ URL('comment/store') }}" method="POST"> 
						    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        					<input type="hidden" name="page_id" value="{{ $article->id }}">
							<input type="text" name="nickname" id="nickname" value="昵称" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '昵称';}">
							<input type="email" name="email" id="email" value="邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '邮箱';}">
							<textarea  name="content" id="newFormContent" ></textarea>	
							<input type="submit" value="提交">
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
<!-- single -->
<script>  
function reply(a) {  
  var nickname = $('#nicknameA').text();
  var textArea = document.getElementById('newFormContent');
  textArea.innerHTML = '@'+nickname+' ';
}
</script>
@include('common.footer')
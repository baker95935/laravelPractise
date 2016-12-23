@extends('_layouts.default')

@section('content')
  <h4>
    <a href="/">⬅️返回首页</a>
  </h4>

  <h1 style="text-align: center; margin-top: 50px;">{{ $article->title }}</h1>
  <hr>
  <div id="date" style="text-align: right;">
    {{ $article->updated_at }}
  </div>
  <div id="content" style="padding: 50px;">
    <p>
      {{ $article->body }}
    </p>
  </div>
  <div id="comments" style="margin-bottom: 100px;">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div id="new">
      <form action="{{ URL('comment/store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page_id" value="{{ $article->id }}">
        <div class="form-group">
          <label>昵称</label>
          <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
        </div>
        <div class="form-group">
          <label>邮箱</label>
          <input type="email" name="email" class="form-control" style="width: 300px;">
        </div>
        <div class="form-group">
          <label>个人主页</label>
          <input type="text" name="website" class="form-control" style="width: 300px;">
        </div>
        <div class="form-group">
          <label>内容</label>
          <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-success col-lg-12">发布</button>
      </form>
    </div>

<script>  
function reply(a) {  
  var nickname = a.parentNode.parentNode.firstChild.nextSibling.getAttribute('data');
  var textArea = document.getElementById('newFormContent');
  textArea.innerHTML = '@'+nickname+' ';
}
</script>

    <div class="conmments" style="margin-top: 100px;">
      @foreach ($article->hasManyComments as $comment)

        <div class="one" style="border-top: solid 20px #efefef; padding: 5px 20px;">
          <div class="nickname" data="{{ $comment->nickname }}">
          @if ($comment->website)
            <a href="{{ $comment->website }}">
              <h3>{{ $comment->nickname }}</h3>
            </a>
          @else
            <h3>{{ $comment->nickname }}</h3>
          @endif
            <h6>{{ $comment->created_at }}</h6>
          </div>
          <div class="content">
            <p style="padding: 20px;">
              {{ $comment->content }}
            </p>
          </div>
          <div class="reply" style="text-align: right; padding: 5px;">
            <a href="#new" onclick="reply(this);">回复</a>
          </div>
        </div>

      @endforeach
    </div>
  </div>
@endsection
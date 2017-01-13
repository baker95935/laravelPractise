@extends('app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">编辑文章</div>

        <div class="panel-body">

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

          <form action="{{ URL('admin/articles/'.$article->id) }}" enctype="multipart/form-data" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            文章标题：<input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}">
            <br>
                     文章类别:
            <select name="typeId" id="typeId">
            @foreach($types as $type)
            	<option value="{{$type->id}}" @if($type->id==$article->typeId) selected="selected" @endif >{{$type->name}}</option>
            @endforeach
            </select>
            <br>
            <br>
            文章封面：@if($article->coverPic)
              <img id="imgDir" src="{{ $article->coverPic}}" width="100px" height="100px">
              @endif
      		<input type="hidden" name="coverPic" id="coverPic" value="{{$article->coverPic}}" />
            <input type="button"  id="imgK" value="重新上传">
             <br>
     文章内容：<textarea name="body" rows="10" class="form-control" required="required">{{ $article->body }}</textarea>
            <br>
            <button class="btn btn-lg btn-info">编辑文章</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>  
@endsection

<script charset="utf-8" src="/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/kindeditor/lang/zh_CN.js"></script>
<script>
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="body"]', {
		allowFileManager : true
	});
	K('#imgK').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				imageUrl : K('#coverPic').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#coverPic').val(url);
					$('#imgDir').attr('src',url);
					$('#imgDir').show();
					editor.hideDialog();
				}
			});
		});
	});
});
</script>
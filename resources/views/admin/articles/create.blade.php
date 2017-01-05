@extends('app')
		
@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">新增文章</div>

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

          <form action="{{ URL('admin/articles') }}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            文章标题：<input type="text" name="title" class="form-control" required="required">
            <br>
            文章类别:
            <select name="typeId" id="typeId">
            @foreach($types as $type)
            	<option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
            </select>
            <br>
            <br>
            文章封面：<input type="file" name="coverPic" id="coverPic">
            <br>
            文章内容： <textarea name="body" rows="10" class="form-control"></textarea>
            <br>
            <button class="btn btn-lg btn-info">新增文章</button>
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
});
</script>
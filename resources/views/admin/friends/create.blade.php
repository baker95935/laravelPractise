@extends('app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">新增友情链接</div>

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

          <form action="{{ URL('admin/friends') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            网站名称：<input type="text" name="name" class="form-control" required="required">
     网址：<input type="text" name="url" class="form-control" required="required">
     排序：<input type="text" name="order" class="form-control" >
            <br>
            <button class="btn btn-lg btn-info">新增友情链接</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
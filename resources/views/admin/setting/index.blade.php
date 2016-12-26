@extends('app')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">网站设置</div>
<div class="panel-body">
 
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/setting/update') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
		<label class="col-md-4 control-label">网站名称:</label>
		<div class="col-md-6">
		<input type="type" class="form-control" name="webName" value="{{ old('email') }}">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-4 control-label">网址:</label>
		<div class="col-md-6">
 		<input type="type" class="form-control" name="webUrl" value="{{ old('email') }}">
		</div>
		</div>
		
		</form>
		</div>
		</div>
		</div>
		</div>
		</div>
		@endsection

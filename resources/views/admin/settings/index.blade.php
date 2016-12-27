@extends('app')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">网站设置</div>
<div class="panel-body">
 
		<form class="form-horizontal" role="form" method="POST" action="{{ URL('admin/settings/update') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
		<label class="col-md-4 control-label">网站名称:</label>
		<div class="col-md-6">                                     
		<input type="type" class="form-control" name="webName" value="{{ $setting->webName }}">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-4 control-label">网址:</label>
		<div class="col-md-6">
 		<input type="type" class="form-control" name="webUrl" value="{{ $setting->webUrl }}">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-4 control-label">网站描述:</label>
		<div class="col-md-6">
 		<input type="type" class="form-control" name="webDescription" value="{{ $setting->webDescription }}">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-4 control-label">网站关键字:</label>
		<div class="col-md-6">
 		<input type="type" class="form-control" name="keywords" value="{{ $setting->keywords }}">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-4 control-label">网站ICP编号:</label>
		<div class="col-md-6">
 		<input type="type" class="form-control" name="icpNo" value="{{ $setting->icpNo }}">
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-md-4 control-label">版权信息:</label>
		<div class="col-md-6">
 		<input type="type" class="form-control" name="copyRights" value="{{ $setting->copyRights }}">
		</div>
		</div>
		<input type="hidden" name="id" value="{{ $setting->id }}">
		 
		 
		<div class="form-group">
		<label class="col-md-4 control-label"><input type="submit" class="btn btn-lg btn-info" value="提交"></label>
		<div class="col-md-6">
 		<label class="col-md-4 control-label"><input type="reset" class="btn btn-lg btn-info" value="重置"></label>
		</div>
		</div>
		 
		</form>
		</div>
		</div>
		</div>
		</div>
		</div>
		@endsection

@extends('app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理友情链接</div>

        <div class="panel-body">
		<a href="{{ URL('admin/friends/create') }}" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-4">网站名称</th>
            <th class="col-lg-2">网址</th>
            <th class="col-lg-2">排序</th>
            <th class="col-lg-1">编辑</th>
            <th class="col-lg-1">删除</th>
          </tr>
          @foreach ($friends as $friend)
            <tr class="row">
              <td class="col-lg-6">
                	{{ $friend->name }}
              </td>
              <td class="col-lg-4">
                     {{ $friend->url }} 
              </td>
              <td class="col-lg-1">
              		{{ $friend->order }}
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/friends/'.$friend->id.'/edit') }}" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-1">
                <form action="{{ URL('admin/friends/'.$friend->id) }}" method="POST" style="display: inline;">
                  <input name="_method" type="hidden" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button onclick="javascript:return confirm('确定要删除吗')" type="submit" class="btn btn-danger">删除</button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>

<?php echo $friends->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
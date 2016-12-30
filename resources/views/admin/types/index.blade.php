@extends('app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理文章分类</div>

        <div class="panel-body">
		<a href="{{ URL('admin/types/create') }}" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-6">名称</th>
            <th class="col-lg-6">介绍</th>
            <th class="col-lg-1">编辑</th>
            <th class="col-lg-1">删除</th>
          </tr>
          @foreach ($types as $type)
            <tr class="row">
              <td class="col-lg-6">
                {{ $type->name }}
              </td>
              <td class="col-lg-6">
                    {{ $type->description }}
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/types/'.$type->id.'/edit') }}" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-1">
                <form action="{{ URL('admin/types/'.$type->id) }}" method="POST" style="display: inline;">
                  <input name="_method" type="hidden" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button type="submit" class="btn btn-danger" onclick="javascript:return confirm('确定要删除吗')">删除</button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>

<?php echo $types->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
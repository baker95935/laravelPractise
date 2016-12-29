@extends('app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理会员</div>

        <div class="panel-body">
		<a href="{{ URL('admin/users/create') }}" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-2">ID</th>
            <th class="col-lg-4">姓名</th>
            <th class="col-lg-4">邮箱</th>
            <th class="col-lg-1">编辑</th>
            <th class="col-lg-1">删除</th>
          </tr>
          @foreach ($users as $user)
            <tr class="row">
              <td class="col-lg-2">
                {{ $user->id }}
              </td>
              <td class="col-lg-4">
                {{ $user->name }}
              </td>
              <td class="col-lg-4">
                {{ $user->email }}
                  </a>
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/users/'.$user->id.'/edit') }}" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-1">
                <form action="{{ URL('admin/users/'.$user->id) }}" method="POST" style="display: inline;">
                  <input name="_method" type="hidden" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button onclick="javascrpt:return confirm('确认删除吗');" type="submit" class="btn btn-danger">删除</button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>


        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
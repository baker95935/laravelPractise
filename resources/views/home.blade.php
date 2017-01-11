@extends('_layouts.default')

@section('content')
  <div id="title" style="text-align: center;">
    <h1>{{$settings->webName}}</h1>
    <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
  </div>
  <hr>
  <div id="content">
    <ul>
     欢迎回来！
    </ul>
  </div>
@endsection
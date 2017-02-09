@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <a href="{{ url('admin/article') }}" class="btn btn-lg btn-success col-xs-12">文章管理</a>
                     <a href="{{ url('admin/category') }}" class="btn btn-lg btn-success col-xs-12">分类管理</a>
                      <a href="{{ url('admin/comment') }}" class="btn btn-lg btn-success col-xs-12">评论管理</a>
                       <a href="{{ url('admin/user') }}" class="btn btn-lg btn-success col-xs-12">用户管理</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

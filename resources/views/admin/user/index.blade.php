@extends('layouts.admin')

@section('content')
<div class="container">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        
    </div>
<!--面包屑导航 结束-->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">用户管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif


                            <a href="{{ url('admin/user/create') }}" class="btn btn-lg btn-primary">新增</a>
                    @foreach ($admins as $user)
  
                          <!--限定用户权限-->
                                <hr>
                        <div class="article">

                            <div class="content">
                                <p>
                                    {{ $user->id }} {{ $user->name }}{{ $user->password }}{{ $user->created_at }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/user/'.$user->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                         
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
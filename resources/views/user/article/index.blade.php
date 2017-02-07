@extends('layouts.user')

@section('content')
<div class="container">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        
    </div>
<!--面包屑导航 结束-->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">文章管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif


                            <a href="{{ url('user/article/create') }}" class="btn btn-lg btn-primary">新增</a>
                    @foreach ($articles as $article)
                            @if  ($article->user_id == Auth::user()->id)<!--限定用户权限-->
                                <hr>
                        <div class="article">
                            <h4>{{ $article->title }}</h4>
                            <div class="content">
                                <p>
                                    {{ $article->body }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('user/article/'.$article->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('user/article/'.$article->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
                            @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
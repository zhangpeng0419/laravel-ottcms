@extends('layouts.admin')

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">评论管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <a href="{{ url('admin/comment/create') }}" class="btn btn-lg btn-primary">新增</a>

                    @foreach ($comments as $comment)
                        <hr>
                        <div class="comment">
                            <h4>{{ $comment->id }}</h4> <p>
                                    {{ $comment->article_id }}
                                </p>
                            <div class="content">
                                <p>
                                    {{ $comment->nickname }}
                                </p>
                                <p>
                                    {{ $comment->email }}
                                </p>
                                <p>
                                    {{ $comment->website }}
                                </p>
                                  <p>
                                    {{ $comment->content }}
                                </p>
                                  <p>
                                    {{ $comment->timestamp }}
                                </p>
                            </div>
                        </div>
                        <a href="{{ url('admin/comment/'.$comment->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/comment/'.$comment->id) }}" method="POST" style="display: inline;">
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
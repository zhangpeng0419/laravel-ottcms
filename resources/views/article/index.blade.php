@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('bootstrap.min.css') }}">
@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                   

                    @foreach ($articles as $article)
                        <hr>
                        <div class="article">
                           <a href="{{ url('article/'.$article->id) }}">
                        <h4>{{ $article->title }}</h4>
                    </a>
                            <div class="content">
                                <p>
                                    {!! $article->body !!}
                                </p>
                            </div>
                        </div>
                        
                        
                    @endforeach
                        {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
@extends('layouts.admin')
@section('content') 
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增一篇文章</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/article') }}" method="post">
                        {!! csrf_field() !!}
                        <tr>
                            <th width="120">分类：</th>
                            <td>
                                <select name="cate_id"  required="required">
                                    @foreach($data as $d)
                                        <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr> <br>
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题">
                        <br>

                        <tr>
                            <th>缩略图：</th>
                            <td>
                                <input type="text" size="50"    name="art_thumb">
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                                <script src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                                <link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadify.css')}}">
                                <script type="text/javascript">
                                    <?php $timestamp = time();?>
                                    $(function() {
                                        $('#file_upload').uploadify({
                                            'buttonText' : '图片上传',
                                            'formData'     : {
                                                'timestamp' : '<?php echo $timestamp;?>',
                                                '_token'     : "{{csrf_token()}}"
                                            },
                                            'swf'      : "{{asset('resources/org/uploadify/uploadify.swf')}}",
                                            'uploader' : "{{url('admin/upload')}}",
                                            'onUploadSuccess' : function(file,data,response) {
                                              //  document.getElementById("file_upload1").value=data.replace(/(^\s*)/g,"");;
                                                xzz = data.replace(/(^\s*)/g,"");//去掉左边的空格
                                                $('input[name=art_thumb]').val(xzz);
                                                $('#art_thumb_img').attr('src','/'+xzz);
                                 // alert(data);
                                            }
                                        });
                                    });
                                </script>
                                <style>
                                    .uploadify{display:inline-block;}
                                    .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                                    table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                                </style>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <img src="" alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;">
                            </td>
                        </tr>
                        内容<br />
                         <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="body" type="text/plain" style="width:860px;height:500px;"></script>
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
                    <style>
                        .edui-default{line-height: 28px;}
                        div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                        {overflow: hidden; height:20px;}
                        div.edui-box{overflow: hidden; height:22px;}
                    </style>
           
                         <button class="btn btn-lg btn-info">新增文章</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
use App\Http\Requests;
 
use App\Comment;
class CommentController extends Controller
{
    public function index()
    {
        return view('admin/Comment/index')->withComments(Comment::all());
    }
    
    public function create()
    {
        return view('admin/comment/create');
    }
    
    public function edit($id)
    {
        return view('admin/comment/edit')->withcomment(comment::find($id));
    }
    public function store(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
    {
        // 数据验证
        $this->validate($request, [
            'title' => 'required|unique:comments|max:255', // 必填、在 comments 表中唯一、最大长度 255
            'body' => 'required', // 必填
        ]);
        // 通过 comment Model 插入一条数据进 comments 表
        $comment = new comment; // 初始化 comment 对象
        $comment->title = $request->get('title'); // 将 POST 提交过了的 title 字段的值赋给 comment 的 title 属性
        $comment->body = $request->get('body'); // 同上
        $comment->user_id = $request->user()->id; // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 comment 的 user_id 属性
        
        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if ($comment->save()) {
            return redirect('admin/comment'); // 保存成功，跳转到 文章管理 页
        } else {
            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|unique:comments,title,'.$id.'|max:255',
            'body' => 'required', 
        ]);
        $comment = comment::find($id);
        $comment->title = $request->get('title');
        $comment->body = $request->get('body');
        if ($comment->save()) {
            return redirect('admin/comment');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }
    public function destroy($id)
    {
        comment::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}

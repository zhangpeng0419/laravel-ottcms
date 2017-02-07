<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
class ArticleController extends Controller
{
    public function show($id)
    {
      return view('article/show')->withArticle(article::find($id));   
    }
	public function index()
    {
        $articles = \DB::table('articles')
            ->orderBy('id', 'desc')

            ->groupBy('id')
            ->paginate(3);
        return view('article/index',['articles'=>$articles]);
       // return view('article/index')->withArticles(Article::all());
    }
}
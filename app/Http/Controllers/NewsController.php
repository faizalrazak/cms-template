<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\News;

class NewsController extends BaseController
{

	public function createNews(Request $request){

		if($request->ajax()){
			return response(News::create($request->all()));
		}
	}

	public function getNews(){
        $news = News::all();
    return view('news.news', compact('news'));
  }

	public function editNews($article_id, Request $request){
	  	$news = News::where('article_id', $request->article_id)->first();
	  	return view('news.editNews', compact('news'));
  }

    public function updateNews(Request $request){
        $news = News::where('article_id',$request->article_id)->first();
        $news->article_date = $request->article_date;
        $news->article_title = $request->article_title;
        $news->source = $request->source;
        $news->comment = $request->comment;
        $news->like = $request->like;
        $news->header_image = $request->header_image;
        $news->inline_image = $request->inline_image;
        $news->author = $request->author;
        $news->save();
        return response($news);
    }


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

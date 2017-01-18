<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Article;
use App\Comment;
use Config;

class ArticlesController extends Controller {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article=Article::find($id);
		$nav=getNavByTypeId($article->typeId);
		
		$comments=DB::table('comments')->where('page_id',$article->id)->orderBy('id', 'desc')->skip(0)->take(10)->get();
		$commentsCount=DB::table('comments')->where('page_id',$article->id)->count();
		
		return view('articles.show',compact('nav','article','comments','commentsCount'));
	}

	//旅行日记
	public function note()
	{
		$typeId=Config::get('constants.TYPEID_NOTE');
		$nav='note';
		
		//最近日志
		$lastestNote=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(0)->take(4)->get();
 
		$noteLeftList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(4)->take(6)->get();//列表左
		$noteMiddleList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(10)->take(4)->get();//列表中
		$noteRightList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(14)->take(8)->get();//列表右
		
		return view('articles.note',compact('nav','lastestNote','noteLeftList','noteMiddleList','noteRightList'));
	}
	
	public function blog()
	{
		//博客
		$typeId=Config::get('constants.TYPEID_BLOG');
		$nav='blog';
		
		$blogList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->paginate(6);
		return view('articles.blog',compact('nav','blogList'));
	}
	
	public function strategy()
	{
		$nav='strategy';
		$typeId=Config::get('constants.TYPEID_STRATEGY');
		
		//最近日志
		$lastestStrategy=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(0)->take(4)->get();
		
		$strategyLeftList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(4)->take(6)->get();//列表左
		$strategyMiddleList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(10)->take(4)->get();//列表中
		$strategyRightList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(14)->take(8)->get();//列表右
		
		return view('articles.strategy',compact('nav','lastestStrategy','strategyLeftList','strategyMiddleList','strategyRightList'));
	}
}

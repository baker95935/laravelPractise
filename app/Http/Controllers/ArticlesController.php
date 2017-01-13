<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('articles.show')->withArticle(Article::find($id));
	}

	public function note()
	{
		$nav='note';
		return view('articles.note')->withNav($nav);
	}
	
	public function blog()
	{
		$nav='blog';
		return view('articles.blog')->with('nav',$nav);
	}
	
	public function strategy()
	{
		$nav='strategy';
		return view('articles.strategy')->with('nav',$nav);
	}
}

<?php namespace App\Http\Controllers;


class IndexController extends Controller {

	
	//首页
  public function index()
  {
  	$nav='index';
    return view('index')->with('nav',$nav);
  }
  
  
  //关于我们
  public function about()
  {
  	$nav='about';
  	return view('about')->with('nav',$nav);
  }

}
<?php namespace App\Http\Controllers;


class IndexController extends Controller {

	
	//首页
  public function index()
  {
  	
    return view('index');
  }
  
  
  //关于我们
  public function about()
  {
  	return view('about');
  }

}
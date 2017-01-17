<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
  	$typeId=7;
  	
  	$myTeamList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(0)->take(4)->get();
  	
  	$teamLeaderOne=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(4)->take(1)->first();
  	$teamLeaderTwo=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(5)->take(1)->first();
 
  	return view('about',compact('nav','myTeamList','teamLeaderOne','teamLeaderTwo'));
  }

}
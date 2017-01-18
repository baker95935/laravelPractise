<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Config;

class IndexController extends Controller {

	
	//首页
  public function index()
  {
  	$nav='index';
  	$noteTypeId=Config::get('constants.TYPEID_NOTE');
  	$strategyTypeId=Config::get('constants.TYPEID_STRATEGY');
  	$blogTypeId=Config::get('constants.TYPEID_BLOG');
  	
  	//最新的游记和攻略各取一个
  	$lastestStrategy=DB::table('articles')->where('typeId',$strategyTypeId)->orderBy('id', 'desc')->first();
  	$lastestNote=DB::table('articles')->where('typeId',$noteTypeId)->orderBy('id', 'desc')->first();
  	
  	//右侧的BLOG列表取3条
  	$blogList=DB::table('articles')->where('typeId',$blogTypeId)->orderBy('id', 'desc')->skip(0)->take(3)->get();
  	
  	$aboutUsOne=DB::table('articles')->where('typeId',$noteTypeId)->orderBy('id', 'desc')->skip(0)->first();
  	$aboutUsTwo=DB::table('articles')->where('typeId',$noteTypeId)->orderBy('id', 'desc')->skip(1)->first();
  	
    return view('index',compact('nav','lastestStrategy','lastestNote','blogList','aboutUsOne','aboutUsTwo'));
  }
  
  
  //关于我们
  public function about()
  {
  	$nav='about';
  	$typeId=Config::get('constants.TYPEID_ABOUT');;
  	
  	$myTeamList=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(0)->take(4)->get();
  	
  	$teamLeaderOne=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(4)->take(1)->first();
  	$teamLeaderTwo=DB::table('articles')->where('typeId',$typeId)->orderBy('id', 'desc')->skip(5)->take(1)->first();
 
  	return view('about',compact('nav','myTeamList','teamLeaderOne','teamLeaderTwo'));
  }

}
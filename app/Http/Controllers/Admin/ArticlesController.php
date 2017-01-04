<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect, Input;

use App\Article;
use App\Type;


class ArticlesController extends Controller {

	public function index()
	{ 
		return view('admin.articles.index')->withArticles(Article::paginate(8));
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.articles.create')->withTypes(Type::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:articles|max:255',
            'body' => 'required',
        	'coverPic'=>'image',
        	'typeId'=>'required'
        ]);

        $article = new Article;
        $article->title = Input::get('title');
        $article->body = Input::get('body');
        $article->typeId = Input::get('typeId');
        
        $file = Input::file('coverPic');
        if($file -> isValid()){
        	$newName=date('Ymdhis').rand(0,5).'.'.$file->getClientOriginalExtension();//命名
        	$path = $file->move('uploads/articles/',$newName);//上传
        	!empty($path->getPathName()) && $article->coverPic=$path->getPathName();//获取路径
        }
 
        $article->user_id = 1;

        if ($article->save()) {
            return Redirect::to('admin/articles');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
    	$article=Article::find($id);
    	$types=Type::all();
        return view('admin.articles.edit',compact('article','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|unique:articles,title,'.$id.'|max:255',
            'body' => 'required',
        ]);

        $article = Article::find($id);
        $article->title = Input::get('title');
        $article->body = Input::get('body');
        $article->user_id = 1;//Auth::user()->id;
		
        $article->typeId = Input::get('typeId');
        
        $file = Input::file('coverPic');
        if(!empty($file)) {
	        if($file -> isValid()){
	        	$newName=date('Ymdhis').rand(0,5).'.'.$file->getClientOriginalExtension();//命名
	        	$path = $file->move('uploads/articles/',$newName);//上传
	        	!empty($path->getPathName()) && $article->coverPic=$path->getPathName();//获取路径
	        }
        }
        
        if ($article->save()) {
            return Redirect::to('admin/articles');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return Redirect::to('admin/articles');
    }
	

}

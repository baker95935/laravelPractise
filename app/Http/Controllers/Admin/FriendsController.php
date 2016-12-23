<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Friend;
 
use Redirect, Input;

class FriendsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.friends.index')->withFriends(Friend::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.friends.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	  	$this->validate($request, [
            'name' => 'required|unique:friends|max:255',
            'url' => 'required',
        ]);

        $friend = new Friend();
        $friend->name = Input::get('name');
        $friend->url = Input::get('url');
        $friend->order = Input::get('order');
        
        if ($friend->save()) {
            return Redirect::to('admin/friends');
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
		return view('admin.friends.edit')->withFriend(Friend::find($id));
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
            'name' => 'required|unique:name|max:255',
            'url' => 'required',
        ]);

        $friend = Friend::find($id);
        $friend->name = Input::get('name');
        $friend->url = Input::get('url');
        $friend->order = Input::get('order');

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
		$friend=Friend::find($id);
		$friend->delete();
		
		return Redirect::to('admin/Friends');
	}

}

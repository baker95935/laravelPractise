<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
 
use Redirect,Input;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.users.index')->withUsers(User::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	 	$this->validate($request, [
            'name' => 'required||unique:users|max:255',
            'email' => 'required|unique:users|max:255|email',
	 		'password' => 'required|max:255|confirmed|min:6',
	 		'password_confirmation' => 'required|max:255|min:6',
        ]);

	 	
        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = bcrypt(Input::get('password'));


        if ($user->save()) {
            return Redirect::to('admin/users');
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
		return view('admin.users.edit')->withUser(User::find($id));
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
			'name'=>'required|max:255',
			'email' => 'required|max:255|email',
			'password' => 'required|max:255|confirmed|min:6',
			'password_confirmation' => 'required|max:255|min:6',
		]);
		
		$user=User::find($id);
		
		$user->name=Input::get('name');
		$user->email=Input::get('email');
		$user->password=bcrypt(Input::get('password'));
		
	  	if ($user->save()) {
            return Redirect::to('admin/users');
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
		$user=User::find($id);
		$user->delete();
		
		return Redirect::to('admin/users');
		
	}

}

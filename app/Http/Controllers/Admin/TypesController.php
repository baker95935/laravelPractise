<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Type;

use Redirect,Input;

class TypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.types.index')->withTypes(Type::paginate(8));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
				'name' => 'required||unique:types|max:255',
				'description' => 'required|max:255',
				]);
		
		 
		$type = new Type;
		$type->name = Input::get('name');
		$type->description = Input::get('description');
		
		
		if ($type->save()) {
			return Redirect::to('admin/types');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.types.edit')->withType(Type::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$type=Type::find($id);
		
		$this->validate($request, [
			'name'=>'required|max:255',
			'description'=>'required|max:255',	
		]);
		
		$type->name=Input::get('name');
		$type->description=Input::get('description');
		
		if($type->save()) {
            return Redirect::to('admin/types');
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
		$type=Type::find($id);
		$type->delete();
		
		return Redirect::to('admin/types');
	}

}

<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Setting;
use Redirect, Input;

class SettingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.settings.index')->withSetting(Setting::find(1));
	}

 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
 	public function update(Request $request)
    {
        $this->validate($request, [
            'webName' => 'required|max:255',
            'webUrl' => 'required|max:255',
        	'webDescription' => 'required|max:255',
        	'keywords' => 'required|max:255',
        	'icpNo' => 'required|max:255',
        	'copyRights' => 'required|max:255',
        ]);

        $id=Input::get('id');
        if($id) {
        	$setting = Setting::find($id);
        }  else {
        	$setting = new Setting();
        }
        
        $setting->webName = Input::get('webName');
        $setting->webUrl = Input::get('webUrl');
        $setting->webDescription = Input::get('webDescription');
        $setting->keywords = Input::get('keywords');
        $setting->icpNo = Input::get('icpNo');
        $setting->copyRights = Input::get('copyRights');

        if ($setting->save()) {
            return Redirect::to('admin/settings');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败');
        }
    }

 

}

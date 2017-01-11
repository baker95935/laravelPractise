<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	//封装个方法
	public static function  webSettingInfo()
	{
		return Setting::where([])->first();
	}
}

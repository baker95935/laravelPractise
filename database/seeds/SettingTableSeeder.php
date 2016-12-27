<?php
use Illuminate\Database\Seeder;
use App\Setting;

class SettingTableSeeder extends Seeder {

	public function run()
	{
		Setting::create([
		'webName'   => '网站测试',
		'webUrl'    => 'http://localhost',
		'webDescription'    => '网站描述 ',
		'keywords' => '网站关键字',
		'icpNo' => '123456',
		'copyRights' => '版权所有',
		]);
	}

}
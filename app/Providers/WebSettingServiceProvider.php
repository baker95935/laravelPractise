<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;

class WebSettingServiceProvider extends ServiceProvider {

	/**
	 * 指定是否延缓提供者加载。
	 *
	 * @var bool
	 */
	protected $defer = false;
	
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->share('settings', Setting::webSettingInfo());
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}

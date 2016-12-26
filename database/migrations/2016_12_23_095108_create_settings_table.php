<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('webName')->comment('网站名称');
			$table->string('webUrl')->comment('网站URL');
			$table->string('webDescription')->nullable()->comment('网站描述');
			$table->string('keywords')->nullable()->comment('网站关键词');
			$table->string('icpNo')->nullable()->comment('网站ICP编号');
			$table->string('copyRights')->nullable()->comment('版权信息');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubGroupsTable extends Migration {

	public function up()
	{
		Schema::create('sub_groups', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('group_id');
		});
	}

	public function down()
	{
		Schema::drop('sub_groups');
	}
}
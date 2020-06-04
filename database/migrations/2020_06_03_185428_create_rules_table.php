<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRulesTable extends Migration {

	public function up()
	{
		Schema::create('rules', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('rule');
			$table->integer('page_id');
		});
	}

	public function down()
	{
		Schema::drop('rules');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRuleUsersTable extends Migration {

	public function up()
	{
		Schema::create('rule_users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('rule_id');
		});
	}

	public function down()
	{
		Schema::drop('rule_users');
	}
}
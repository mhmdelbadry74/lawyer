<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncomesTable extends Migration {

	public function up()
	{
		Schema::create('incomes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('office_id');
			$table->integer('dir_id');
			$table->integer('unit_id');
			$table->integer('income_type_id');
			$table->integer('sender_id');
			$table->integer('sender_detail_id');
			$table->integer('update_user')->nullable();
			$table->integer('created_user')->nullable();
			$table->string('attachment');
			$table->string('asked_name');
			$table->integer('income_number');
			$table->integer('outcome_number');
			$table->date('income_date');
			$table->date('outcome_date');
			$table->longText('income_issues');
			$table->string('remark');
			$table->string('status');
		});
	}

	public function down()
	{
		Schema::drop('incomes');
	}
}
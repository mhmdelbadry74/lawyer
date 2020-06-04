<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttachmentsTable extends Migration {

	public function up()
	{
		Schema::create('attachments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('income_id');
			$table->string('attachment_source');
		});
	}

	public function down()
	{
		Schema::drop('attachments');
	}
}
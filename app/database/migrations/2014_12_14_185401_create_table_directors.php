<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDirectors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('directors', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('firstname');
			$table->string('name');
			$table->smallInteger('talent');
			$table->integer('wage');
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
		Schema::drop('directors');
	}

}

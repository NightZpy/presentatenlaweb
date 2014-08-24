<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestSoftwareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('software_applications', function($table)
        {
        	$table->increments('id');
        	$table->string('name', 128);
            $table->string('email', 128);
            $table->string('phone', 128);
            $table->string('software', 128);
			$table->timestamps();
			$table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('software_applications');
	}

}

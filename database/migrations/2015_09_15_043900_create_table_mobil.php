	<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMobil extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mobil', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kode_mobil');
			$table->string('nama_mobil');
			$table->string('merek_mobil');
			$table->string('harga_mobil');
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
		Schema::drop('mobil');
	}

}

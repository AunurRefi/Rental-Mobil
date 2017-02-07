<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePinjaman extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pinjaman', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_pesan');
			$table->string('nama');
			$table->text('alamat');
			$table->date('tanggal_pinjaman');
			$table->date('tanggal_kembali');
			$table->string('merek_mobil');
			$table->string('nama_mobil');
			$table->string('kode_mobil');
			$table->time('waktu_boking');
			$table->string('harga_mobil');
			$table->string('status');
			$table->string('total');
			$table->string('status_pengambilan');
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
		Schema::drop('pinjaman');
	}

}

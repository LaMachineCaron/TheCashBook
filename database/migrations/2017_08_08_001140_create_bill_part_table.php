<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bill_parts', function (Blueprint $table) {
			$table->integer('bill_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->double('percentage');
			$table->timestamps();
			$table->softDeletes();

			$table->primary(['bill_id', 'user_id']);

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('bill_id')->references('id')->on('bills');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('bill_parts');
	}
}

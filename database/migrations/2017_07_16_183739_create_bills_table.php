<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bills', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('billBookId')->unsigned();
			$table->double('totalPrice');
			$table->string('title');
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('billBookId')->references('id')->on('bill_books');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('bills');
	}
}

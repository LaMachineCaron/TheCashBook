<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('userFrom')->unsigned();
	        $table->integer('userTo')->unsigned();
	        $table->integer('billBookId')->unsigned();
	        $table->double('amount');
            $table->timestamps();

	        $table->foreign('userFrom')->references('id')->on('users');
	        $table->foreign('userTo')->references('id')->on('users');
	        $table->foreign('billBookId')->references('id')->on('bill_books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

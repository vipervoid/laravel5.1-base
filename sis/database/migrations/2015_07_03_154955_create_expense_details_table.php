<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_details', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('expense_id')->unsigned();
            $table->string('category');
            $table->string('biller_name')->nullable();
            $table->string('paricular')->nullable();
            $table->text('remarks')->nullable();
            $table->float('amount');
            $table->integer('created_by')->unsigned();
            $table->dateTime('date');
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
        Schema::drop('expense_details');
    }
}

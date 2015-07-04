<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExpenseDetailsAdditionalColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_details', function (Blueprint $table) {
            //
            $table->string('account_number', 128)->after('biller_name')->nullable();
            $table->string('invoice_number', 64)->after('account_number')->nullable();
            $table->date('due_date')->after('created_by')->nullable();
            $table->float('total_consumption')->after('remarks')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_details', function (Blueprint $table) {
            //
            $table->dropColumn(['account_number', 'invoice_number', 'due_date', 'total_consumption']);
        });
    }
}

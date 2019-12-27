<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customerNumber',10);
            $table->char('customerName',50);
            $table->char('contractLastname',50);
            $table->char('contractFirstname',50);
            $table->char('Phone',50);
            $table->Integer('salesRepEmployeeNumber',10);
            // $table->foreign('saleRepEmployeeNumber')->references('employeeNumber')->on('employees');
            $table->decimal('creditLimiit',10,2);
            $table->integer('totalPoint',11)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orderNumber',10)->autoIncrement();
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->date('shippedDate');
            $table->smallinteger('status',5)->unsigned();
            $table->foreign('status')->references('statusID')->on('order_status');
            $table->text('comments');
            $table->integer('point',11);
            $table->integer('customerNo',10)->unsigned();
            $table->foreign('customerNo')->references('customerNumber')->on('customers');
            $table->integer('fillBy',10)->insigned();
            $table->foreign('fillBy')->references('employeeNumber')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

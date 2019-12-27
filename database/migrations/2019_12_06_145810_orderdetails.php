<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orderdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer('orderNumber',10)->unsigned();
            $table->foreign('orderNumber')->references('orderNumber')->on('orders');
            $table->char('productCode',45)->unsigned();
            $table->foreign('productCode')->references('productCode')->on('products');
            $table->integer('quantityOrdered',10);
            $table->decimal('priceEach',10,2);
            $table->smallinteger('orderLineNumber',6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}

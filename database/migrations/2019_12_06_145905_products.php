<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->char('productCode',15)->primary();
            $table->char('productName',70);
            $table->char('productLine',50)->unsigned();
            $table->foreign('productLine')->references('productLine')->on('productlines');
            $table->char('productScale',10);
            $table->char('productVendor',50);
            $table->text('productDescription');
            $table->smallinteger('quantityInStock');
            $table->decimal('buyPrice',10,2);
            $table->decimal('MSRP',10,2);
            $table->date('editDate');
            $table->smallinteger('editStatus',5)->unsigned();
            $table->foreign('editStatus')->references('statusID')->on('product_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

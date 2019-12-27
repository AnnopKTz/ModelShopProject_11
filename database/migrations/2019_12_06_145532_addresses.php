<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('customerNo',10);
            // $table->foreign('customerNo')->references('customerNumber')->on('customers');
            $table->char('addressLine',100);
            $table->char('city',50);
            $table->char('state',45);
            $table->char('postalCode',15);
            $table->char('country',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}

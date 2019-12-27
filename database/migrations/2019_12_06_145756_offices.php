<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Offices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->char('officeCode',10)->primary();
            $table->char('city',50);
            $table->char('Phone',50);
            $table->char('addressLine',100);
            $table->char('state',45);
            $table->char('postalCode',15);
            $table->char('country',50);
            $table->char('territory',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}

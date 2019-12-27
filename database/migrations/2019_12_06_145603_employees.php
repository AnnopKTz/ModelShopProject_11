<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employeeNumber',10);
            $table->char('firstName',50);
            $table->char('lastName',50);
            $table->char('extension',10);
            $table->char('email',100);
            $table->char('officeCode',10);
            $table->integer('reportTo',10);
            $table->foreign('reportTo')->references('employeeNumber')->on('employees');
            $table->char('jobTitle',50);
            $table->char('password',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

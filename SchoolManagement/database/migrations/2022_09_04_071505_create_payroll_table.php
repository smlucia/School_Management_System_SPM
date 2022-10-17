<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll', function (Blueprint $table) {
            $table->id();


            $table->string("staff_name");
            $table->string("photo");
            $table->string("month");
            $table->integer("year");
            $table->integer("salary");
            $table->integer("allowance");
            $table->integer("cost");
            $table->integer("ntf");
            $table->integer("etf");
            $table->integer("netSalary");


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
        Schema::dropIfExists('payroll');
    }
};

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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("NIC");
            $table->string("address");
            $table->string("contact_no");
            $table->date("DOB");
            $table->string("gender");
            $table->string("Email");
            $table->date("First_appoinment_date");
            $table->string("designation");
            $table->string("type");
            $table->integer("distance");
            $table->string('photo', 300);


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
        Schema::dropIfExists('staff');
    }
};

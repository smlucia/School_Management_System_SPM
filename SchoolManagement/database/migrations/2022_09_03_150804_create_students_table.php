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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("index");
            $table->string("address");
            $table->string("contact_no");
            $table->date("DOB");
            $table->string("gender");
            $table->integer("grade");
            $table->string("email");
            $table->date("reg_date");
            $table->string("occupation");
            $table->string("nic");
            $table->string("parent_name");
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
        Schema::dropIfExists('students');
    }
};

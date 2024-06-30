<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Types\Type;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_types', function (Blueprint $table) {
            $table->id();
            $table->string('lt_name');
            $table->integer('total_leave_year');
            $table->integer('status');
            $table->timestamps();    
            // $table->integer('Emp_id'); 
            // $table->integer('Casual_leave');
            // $table->integer('Vacation_leave');
            // $table->integer('Stick_leave');
            // $table->integer('Maternity/Paternity_leave');
            // $table->integer('Family/Medical_leave');
            // $table->integer('Study_leave');
            // $table->integer('Special_leave');
            // $table->integer('Military_leave');
            // $table->integer('Administrative_leave');
            // $table->integer('Other_leave');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_types');
    }
};

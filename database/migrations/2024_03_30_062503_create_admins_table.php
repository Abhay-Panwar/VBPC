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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('emp_id');
            $table->string('admin_name');
            $table->integer('dpt_id');
            $table->integer('dst_id');
            $table->date('dob');
            $table->string('image');
            $table->string('email');
            $table->string('moblie_no');
            $table->string('password');
            $table->timestamps();
            $table->integer('delete3');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};

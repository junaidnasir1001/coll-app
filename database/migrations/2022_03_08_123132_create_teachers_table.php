<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('reg_id');
            $table->string('name');
            $table->string('father_name');
            $table->date('current_join_date');
            $table->date('joining_date_in_service');
            $table->string('designation');
            $table->date('dob');
            $table->integer('cnic');
            $table->string('address');
            $table->integer('first_mobile');
            $table->integer('second_mobile');
            $table->string('gender');
            $table->string('email');
            $table->string('last_qualification');
            $table->string('department')->nullable();
            $table->string('file_path');
            $table->string('marital_status');
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
        Schema::dropIfExists('teachers');
    }
}

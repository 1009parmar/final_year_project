<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
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
            $table->string('f_name');
            $table->string('l_name');
            $table->mediumText('email');
            $table->date('join_date');
            $table->string('password');
            $table->string('c_password');
            $table->string('m_number');
            $table->string('gender');
            $table->string('designation');
            $table->string('department');
            $table->date('dob');
            $table->string('qualification');
            $table->string('experience');
            $table->string('interest');
            $table->string('address');
            $table->mediumText('photo');
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
}

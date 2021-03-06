<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
              $table->string('phone_no');
              $table->string('pancard_no');
              $table->string('aadhar_no');
              $table->string('address');
              $table->string('city');
              $table->string('state');
              $table->string('d_o_b');
              $table->string('father_name');
              $table->string('mother_name');
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
        Schema::dropIfExists('user_profiles');
    }
}

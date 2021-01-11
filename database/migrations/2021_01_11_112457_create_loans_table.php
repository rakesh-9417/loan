<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('loan_purpose');
            $table->float('required_loan_amount');
            $table->float('issued_loan_amount');
            $table->float('return_amount');
            $table->string('issue_date');
            $table->string('email_interval');
            $table->float('no_of_emi');
            $table->string('emi_starterd_at');
            $table->string('remarks');
            $table->tinyInteger('status');         
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
        Schema::dropIfExists('loans');
    }
}

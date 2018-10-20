<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_request_id',45)->unique();
            $table->string('user_id',45);
            $table->string('request_to_user_id',45);
            $table->string('bank_transaction_id',45);
            $table->double('amount');
            $table->string('image',150);
            $table->string('user_bank',45);
            $table->string('to_user_bank',45);
            $table->boolean('status')->comment('1 = open, 2 = close');
            $table->boolean('read')->comment('1 = read');
            $table->softDeletes()->nullable();
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
        Schema::dropIfExists('payment_request');
    }
}

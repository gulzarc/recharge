<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisputeTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispute_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dispute_transaction_id',45)->unique();
            $table->string('transaction_id',45);
            $table->string('user_id',45);
            $table->boolean('status')->comment('1 = pending,else resolved');
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
        Schema::dropIfExists('dispute_transaction');
    }
}

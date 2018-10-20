<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wallet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wallet_id',45)->unique();
            $table->string('user_id',45);
            $table->string('transaction_id',45);
            $table->timestamp('transaction_date_time');
            $table->string('transaction_type_id',45);
            $table->double('amount');
            $table->double('prev_balance');
            $table->double('effected_balance');
            $table->string('transaction_type')->comment('1 = credit,else debit');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('user_wallet');
    }
}

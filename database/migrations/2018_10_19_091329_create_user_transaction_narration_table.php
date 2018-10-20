<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTransactionNarrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_transaction_narration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_narration_id',45)->unique();
            $table->string('uesr_id',45);
            $table->string('all_id',45);
            $table->string('transaction_type_id',45);
            $table->text('message');
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
        Schema::dropIfExists('user_transaction_narration');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageDisputeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_dispute', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message_dispute_id',45)->unique();
            $table->string('dispute_transaction_id',45);
            $table->string('user_id',45);
            $table->text('message');
            $table->boolean('read')->comment('1 = read,else unread');
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
        Schema::dropIfExists('message_dispute');
    }
}

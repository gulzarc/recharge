<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_purchase_id',45)->unique();
            $table->string('user_id',45);
            $table->string('purchase_from_id',45);
            $table->double('amount');
            $table->string('purchase_type')->comment('1 = cash,else credit');
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
        Schema::dropIfExists('user_purchase');
    }
}

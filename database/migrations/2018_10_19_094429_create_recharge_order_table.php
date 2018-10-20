<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRechargeOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharge_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id',45)->unique();
            $table->string('api_id',45);
            $table->string('user_id',45);
            $table->string('operator_id',45);
            $table->string('service_id',45);
            $table->string('source',45);
            $table->string('status')->comment('1 = success,2 = pending,3 = fail');
            $table->double('amount');
            $table->string('mobile_no');
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
        Schema::dropIfExists('recharge_order');
    }
}

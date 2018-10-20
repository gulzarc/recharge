<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_purchase_id',45)->unique();
            $table->string('api_id',45);
            $table->double('amount');
            $table->text('message');
            $table->boolean('purchase_type')->default(1)->comment('1 = cash,else credit');
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
        Schema::dropIfExists('admin_purchase');
    }
}

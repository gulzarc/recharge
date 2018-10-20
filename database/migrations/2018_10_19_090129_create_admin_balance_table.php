<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_balance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_balance_id',45)->unique();
            $table->string('all_id',45);
            $table->string('transaction_type_id',45);
            $table->double('amount');
            $table->double('prev_balance');
            $table->double('total_balance');
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
        Schema::dropIfExists('admin_balance');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_sale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_sale_id',45)->unique();
            $table->double('amount');
            $table->string('sale_type')->comment('1 = cash,else credit');
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
        Schema::dropIfExists('admin_sale');
    }
}

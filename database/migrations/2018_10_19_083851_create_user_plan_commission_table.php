<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlanCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plan_commission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_commission_id',45)->unique();
            $table->string('operator_list_id',45);
            $table->string('plan_id',45);
            $table->boolean('comission');
            $table->boolean('commission_earn_type',45)->default(1)->comment('1 = commission,else surcharge'); 
            $table->boolean('commission_type',45)->default(1)->comment('1 = percentage,else flat'); 
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
        Schema::dropIfExists('user_plan_commission');
    }
}

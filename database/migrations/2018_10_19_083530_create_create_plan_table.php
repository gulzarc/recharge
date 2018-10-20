<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_id',45)->unique();
            $table->string('creator_id',45);
            $table->string('plan_name',45);
            $table->string('user_role_id',45);
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
        Schema::dropIfExists('create_plan');
    }
}

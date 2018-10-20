<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiOperatorPriorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_operator_priority', function (Blueprint $table) {
            $table->increments('id');
            $table->string('operator_priority_id',45)->unique();
            $table->string('operator_list_id',45);
            $table->string('api_id',45);
            $table->integer('priority');
            $table->boolean('status',45)->comment('1 = Active');
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
        Schema::dropIfExists('api_operator_priority');
    }
}

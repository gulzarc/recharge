<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_operators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_operator_id',45)->unique();
            $table->string('operator_id',45);
            $table->string('api_id',45);
            $table->string('operator_key',45);
            $table->boolean('operator_type',45)->default(1)->comment('1 = prepaid,else postpaid');            
            $table->string('service_id',45);
            $table->boolean('commission_earn_type',45)->default(1)->comment('1 = commission,else surcharge'); 
            $table->boolean('status',45)->default(1)->comment('1 = active,else deactive');
            $table->double('commission');  
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
        Schema::dropIfExists('api_operators');
    }
}

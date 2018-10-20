<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain', function (Blueprint $table) {
            $table->increments('id');
            $table->string('complain_id',45)->unique();
            $table->string('user_id',45);
            $table->text('message');
            $table->boolean('status')->comment('1 = pending,else resolved');
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
        Schema::dropIfExists('complain');
    }
}

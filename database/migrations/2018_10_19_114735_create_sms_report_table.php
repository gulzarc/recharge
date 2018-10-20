<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_report', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sms_report_id',45)->unique();
            $table->string('user_id',45);
            $table->string('sms_type_id',45);
            $table->text('message');
            $table->boolean('status')->comment('1 = delivered, 2 = pending, 3 = failed');
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
        Schema::dropIfExists('sms_report');
    }
}

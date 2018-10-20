<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75);
            $table->string('email')->unique();
            $table->string('user_id',45)->unique();
            $table->string('mobile_no',20)->unique();
            $table->string('state',45)->nullable();
            $table->string('city',45)->nullable();
            $table->string('address',45)->nullable();
            $table->integer('pin')->nullable();
            $table->string('plan_id',45)->nullable();
            $table->string('parent_id',45)->nullable();
            $table->string('parent_role',45)->nullable();
            $table->string('user_role_id',45)->nullable();
            $table->boolean('status',45)->default(1)->comment('1 = Active');
            $table->string('ip_address')->nullable();
            $table->string('device')->nullable();
            $table->timestamp('last_login_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

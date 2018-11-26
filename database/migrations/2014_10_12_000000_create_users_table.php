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
        if (!Schema::hasTable('users'))
        {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('role_id')->default(2);
                $table->string('name');
                $table->string('second_name');
                $table->string('last_name');
                $table->string('email')->unique();
                $table->string('phone')->unique();
                $table->string('city');
                $table->string('school');
                $table->string('class');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
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

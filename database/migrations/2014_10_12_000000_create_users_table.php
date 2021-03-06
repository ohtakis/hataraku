<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel');
            $table->string('photo');
            $table->string('sub_name');
            $table->string('prefecture');
            $table->string('city');
            $table->string('adress');
            $table->string('ad_open_lv');
            $table->string('description');
            $table->string('job');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

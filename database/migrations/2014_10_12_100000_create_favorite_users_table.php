<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteUsersTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_uers', function (Blueprint $table) {
            $table->increments('id'); //ID
            $table->integer('own_id'); //自分のID
            $table->integer('like_id'); //好きなユーザのID
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
        Schema::drop('favorite_uers');
    }
}

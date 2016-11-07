<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id'); //コメントID
            $table->integer('user_id'); //投稿者のID
            $table->integer('request_id'); //募集のID
            $table->string('title'); //タイトル
            $table->string('description'); //内容
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
        Schema::drop('offers');
    }
}

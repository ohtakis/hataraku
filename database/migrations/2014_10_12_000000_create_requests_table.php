<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id'); //投稿者のID
            $table->string('title'); //タイトル
            $table->string('description'); //内容
            $table->string('want'); //欲しいもの概要
            $table->string('provide'); //提供するもの概要
            $table->string('memo'); //メモ（非公開）
            $table->integer('match_user'); //選んだユーザーID
            $table->integer('match_offer'); //選んだオファーID
            $table->string('status'); //ステータス。公開・下書き・削除の3段階
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
        Schema::drop('requests');
    }
}

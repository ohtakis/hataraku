<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteOffersTable extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_offers', function (Blueprint $table) {
            $table->increments('id'); //ID
            $table->integer('own_id'); //自分のID
            $table->integer('like_user_id'); //好きな提案の投稿者ID
            $table->integer('like_offer_id'); //好きな提案のID
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
        Schema::drop('favorite_offers');
    }
}

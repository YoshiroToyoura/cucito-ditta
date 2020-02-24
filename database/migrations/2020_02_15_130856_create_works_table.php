<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id'); //商品id
            $table->string('name'); //商品名
            $table->string('image_path')->nullable; //商品画像
            $table->text('introduction')->nullable; //商品紹介文
            $table->string('category_id'); //商品ジャンルid
            $table->text('minne_id')->nullable(); //ミンネURL
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
        Schema::dropIfExists('works');
    }
}

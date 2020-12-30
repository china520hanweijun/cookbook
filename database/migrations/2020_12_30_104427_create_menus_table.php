<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            #简介
            $table->string('synopsis');
            #作者
            $table->integer('uid');
            #分类
            $table->integer('cid');
            #配料
//            $table->integer('fid');
            #步骤
//            $table->integer('sid');
            #难度
            $table->integer('lid')->default(0);
            #点击数
            $table->integer('hits')->default(0);
            #点赞
            $table->integer('likes')->default(0);
            #收藏
            $table->integer('cnums')->default(0);
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}

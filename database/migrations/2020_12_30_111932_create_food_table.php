<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        食材
    */
        Schema::create('food', function (Blueprint $table) {
            $table->bigIncrements('id');
            #菜谱id
            $table->integer('mid');
            #食材名
            $table->string('name');
            #用量
            $table->string('nums');
//            $table->softDeletes();
//            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}

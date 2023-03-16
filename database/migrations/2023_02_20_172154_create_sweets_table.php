<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sweets', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained();
            //'user_id'は'usersテーブルの'id'を参照する外部キー
            $table->foreignId('region_id')->constrained();
            //'region_id'は'regionsテーブル'の'id'を参照する外部キー
            $table->foreignId('prefecture_id')->constrained();
            //'prefecture_id'は'prefecturesテーブル'の'id'を参照する外部キー
            $table->string('name');
            $table->text('description');
            $table->string('image_url')->nullable();        
            $table->timestamps();
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
        Schema::dropIfExists('sweets');
    }
};

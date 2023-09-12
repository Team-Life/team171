<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->smallInteger('type')->nullable()->comment('種別');
            $table->string('category_name',100)->comment('名前');
            $table->timestamps();
            //このprimaryとindexは修飾子ではなく、メソッドらしい
            //bigInteger('id')にautoincrementをつけたのがid()らしい
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

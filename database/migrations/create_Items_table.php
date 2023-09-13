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
        Schema::create('Items', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->bigInteger('user_id')->comment('ユーザーID');
            $table->string('name',100)->comment('名前');
            $table->smallInteger('type')->nullable()->comment('種別');
            // nullable()は厳密には、「デフォルト値をNULLにし、」NULLを受け入れるカラムを定義する
            $table->string('detail',500)->nullable()->comment('詳細');
            $table->boolean('delete_flag')->default(0)->comment('0なら表示、1なら論理削除'); // カスタムの削除フラグ、論理削除で利用
            $table->integer('updated_by')->default(1)->comment('情報更新者（ログイン中管理者）のユーザーid');
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            //このprimaryとindexは修飾子ではなく、メソッドらしい
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Items');
    }
};

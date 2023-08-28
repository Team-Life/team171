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
        Schema::create('Users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('name',100)->comment('名前');
            $table->string('email',255)->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('メール確認日時');
            $table->string('password',255)->comment('パスワード');
            // nullable()は厳密には、「デフォルト値をNULLにし、」NULLを受け入れるカラムを定義する
            $table->string('remember_token',100)->nullable()->comment('保持トークン');
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
        Schema::dropIfExists('Users');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('name',40)->comment('名前');
            $table->string('email',256)->charset('utf8')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('メール確認日時');
            $table->string('password',255)->comment('パスワード');
            $table->rememberToken(100)->nullable()->comment('保持トークン');
            $table->tinyInteger('role')->default(0)->index('index_role')->comment('ロール');
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }//ファイル名が違っても作るテーブルの内容が同じ場合、
    // Modelに結びついていないファイルは結びついている方に吸収される

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

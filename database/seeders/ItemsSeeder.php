<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Items::create([
            'user_id' => fake()->numberBetween($min=30,$max=100),//指定した範囲内の整数のどれか
            'name' => fake()->realText(10),
            'type' => fake()->numberBetween($min=1,$max=8),
            'detail' =>fake()->realText(100),
            'status' =>fake()->numberBetween($min=0,$max=1),
            'updated_by' => fake()->numberBetween($min=1,$max=10),
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Items::create([
            'user_id' => fake()->numberBetween($min=30,$max=100),//指定した範囲内の整数のどれか
            'name' => '地球破壊爆弾',//左のように文字列もmigrationファイルの条件を満たせば日本語も可能（シングルクォーテーションではさむ）
            'type' => fake()->numberBetween($min=1,$max=8),
            'detail' =>'某猫型ロボットがネズミにどら焼きをたべられそうになった時に使用しかけた地球を破壊する力をもつ未来の爆弾',
            'status' =>fake()->numberBetween($min=0,$max=1),
            'updated_by' => fake()->numberBetween($min=1,$max=10),
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);//矢印の先のデータ型もマイグレーションファイルの設定に合わせる

        \App\Models\Items::create([
            'user_id' => fake()->numberBetween($min=30,$max=100),//指定した範囲内の整数のどれか
            'name' => fake()->realText(10),//realTextはなぜか宮沢賢治の「銀河鉄道の夜」から単語を拾うオプション
            'type' => fake()->numberBetween($min=1,$max=8),
            'detail' =>fake()->realText(100),
            'status' =>fake()->numberBetween($min=0,$max=1),
            'updated_by' => fake()->numberBetween($min=1,$max=10),
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Items::create([
            'user_id' => fake()->numberBetween($min=30,$max=100),//指定した範囲内の整数のどれか
            'name' => '週刊少年ジャンプ',
            'type' => 5,
            'detail' =>'基本的に月曜日発売であるが、月曜日が祝日であるときにはその前の週の土曜日に発売する集英社の漫画雑誌、最近だと、あかね噺とwitchwatchが面白い',
            // witchwatchみたいな英語として認識されない文字があるときは、code spell checkerでその単語を無視する設定をしないとエラーになるので注意
            'status' =>fake()->numberBetween($min=0,$max=1),
            'updated_by' => fake()->numberBetween($min=1,$max=10),
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

    }
}

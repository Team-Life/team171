<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Item::create([
            'user_id' => '2',//指定した範囲内の整数のどれか
            'name' => 'パン',
            'type' => '1',
            'detail' =>'3',
            'delete_flag' =>'0',
            'updated_by' => '1',
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Item::create([
            'user_id' => '3',//指定した範囲内の整数のどれか
            'name' => '地球破壊爆弾',//左のように文字列もmigrationファイルの条件を満たせば日本語も可能（シングルクォーテーションではさむ）
            'type' => '9',
            'detail' =>'某猫型ロボットがネズミにどら焼きをたべられそうになった時に使用しかけた地球を破壊する力をもつ未来の爆弾',
            'delete_flag' => 1,
            'updated_by' => '1',
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);//矢印の先のデータ型もマイグレーションファイルの設定に合わせる

        \App\Models\Item::create([
            'user_id' => '4',//指定した範囲内の整数のどれか
            'name' => '鉛筆',//realTextはなぜか宮沢賢治の「銀河鉄道の夜」から単語を拾うオプション
            'type' => '2',
            'detail' => '書くための道具',
            'delete_flag' =>'0',
            'updated_by' => '1',
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Item::create([
            'user_id' => '5',//指定した範囲内の整数のどれか
            'name' => '週刊少年ジャンプ',
            'type' => 6,
            'detail' =>'基本的に月曜日発売であるが、月曜日が祝日であるときにはその前の週の土曜日に発売する集英社の漫画雑誌、最近だと、あかね噺とwitchwatchが面白い',
            // witchwatchみたいな英語として認識されない文字があるときは、code spell checkerでその単語を無視する設定をしないとエラーになるので注意
            'delete_flag' => 0,
            'updated_by' => '1',
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);


        \App\Models\Item::create([
            'user_id' => '7',//指定した範囲内の整数のどれか
            'name' => '我が輩の万年筆',
            'type' => 2,
            'detail' =>'これじゃないとだめなやつ。誰だ出品したやつ。',
            // witchwatchみたいな英語として認識されない文字があるときは、code spell checkerでその単語を無視する設定をしないとエラーになるので注意
            'delete_flag' => 0,
            'updated_by' => 0,
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Item::create([
            'user_id' => '8',//指定した範囲内の整数のどれか
            'name' => '週刊少年マガジン',
            'type' => 6,
            'detail' =>'基本的に水曜日発売であるが、水曜日が祝日であるときにはその週の火曜日に発売する講談社の漫画雑誌、最近だと、赤羽骨子のボディーガードと女神のカフェテラスが面白い。あとジャンプに比べラブコメが多い傾向にある。',
            // witchwatchみたいな英語として認識されない文字があるときは、code spell checkerでその単語を無視する設定をしないとエラーになるので注意
            'delete_flag' => 0,
            'updated_by' => 1,
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Item::create([
            'user_id' => '9',//指定した範囲内の整数のどれか
            'name' => 'すごい釣り竿',
            'type' => 7,
            'detail' =>'どんな物も釣れる釣り竿',
            // witchwatchみたいな英語として認識されない文字があるときは、code spell checkerでその単語を無視する設定をしないとエラーになるので注意
            'delete_flag' => 0,
            'updated_by' => 1,
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);


        \App\Models\Item::create([
            'user_id' => '9',//指定した範囲内の整数のどれか
            'name' => '竹刀',
            'type' => 7,
            'detail' =>'剣道用具、個人的には、古刀型の柄長めのやつが使いやすい',
            // witchwatchみたいな英語として認識されない文字があるときは、code spell checkerでその単語を無視する設定をしないとエラーになるので注意
            'delete_flag' => 0,
            'updated_by' => 1,
            'created_at' => now(),//php artisan db:seed --class=ItemsSeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);
    }
}

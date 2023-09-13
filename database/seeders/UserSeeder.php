<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Users::create([
            'name' => '管理者1',
            'email' => 'admin01@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator1'), // パスワードをハッシュ化する関数
            'remember_token' =>fake()->text(20),
            'role' =>'1',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者2',
            'email' => 'admin02@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator2'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'2',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者3',
            'email' => 'admin03@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator3'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'3',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者4',
            'email' => 'admin04@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator4'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'4',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者5',
            'email' => 'admin05@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator5'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'5',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者6',
            'email' => 'admin06@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator6'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'6',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);


        \App\Models\Users::create([
            'name' => '管理者7',
            'email' => 'admin07@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator7'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'7',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者8',
            'email' => 'admin08@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator8'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'8',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者9',
            'email' => 'admin09@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator9'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'9',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '管理者10',
            'email' => 'admin10@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator10'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'10',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '夏目漱石',
            'email' => 'wagahai@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('IAmACat_IDoNotHaveMyName'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'0',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '樋口一葉',
            'email' => 'higuchi_oneleaf@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('takekurabe'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'0',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);


        \App\Models\Users::create([
            'name' => '福沢諭吉',
            'email' => 'yukichi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('gakumonnosusume'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'0',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\Users::create([
            'name' => '渋沢栄一',
            'email' => 'I-am-new-ichimanyen@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('seiten0tsuke'), // パスワードをハッシュ化する関数
            'remember_token' =>Hash::make(fake()->text(20)),
            'role' =>'0',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

    }
}

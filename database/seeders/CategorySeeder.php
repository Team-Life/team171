<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'type' => '1',
            'category_name' => '生活用品',//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
    ]);

        \App\Models\Category::create([
            'type' => '2',
            'category_name' => '事務用品',//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
    ]);

    \App\Models\Category::create([
            'type' => '3',
            'category_name' => '食料品',//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
    ]);

        \App\Models\Category::create([
            'type' => '4',
            'category_name' => '医療品',//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
    ]);

    \App\Models\Category::create([
            'type' => '5',
            'category_name' => '家電用品',//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
    ]);

    \App\Models\Category::create([
        'type' => '6',
        'category_name' => '本、マンガ',//一定の物を入れたい場合は右の値を指定された物に直して
        'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
        'updated_at' => now(),//現在の時刻を入れるメソッド
        //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
        //idのカラムは要らない
    ]);

    \App\Models\Category::create([
        'type' => '7',
        'category_name' => '嗜好品',//一定の物を入れたい場合は右の値を指定された物に直して
        'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
        'updated_at' => now(),//現在の時刻を入れるメソッド
        //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
        //idのカラムは要らない
    ]);

    \App\Models\Category::create([
    'type' => '8',
    'category_name' => '乗り物',//一定の物を入れたい場合は右の値を指定された物に直して
    'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
    'updated_at' => now(),//現在の時刻を入れるメソッド
    //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
    //idのカラムは要らない
    ]);

    \App\Models\Category::create([
    'type' => '9',
    'category_name' => 'その他',//一定の物を入れたい場合は右の値を指定された物に直して
    'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
    'updated_at' => now(),//現在の時刻を入れるメソッド
    //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
    //idのカラムは要らない
    ]);
    }
}

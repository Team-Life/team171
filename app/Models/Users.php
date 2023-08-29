<?php

namespace App\Models;

//こっちの「Users」モデルは、データーベース定義書に従ったもの
//一覧表示などをするときにはこちらを使う（検証中です・・）？

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Model
{
    use HasFactory;
        //$fillable = [～]の～に対応するmigrationのファイルのカラム名を書くことで
    //ユーザーが一括で値を保存・更新可能にしたいカラムを設定
    //protectedキーワードを使って宣言されたプロパティやメソッドは、そのクラス自体と、
    //そのクラスを継承したサブクラス（派生クラス）からアクセス可能だが、
    //クラスの外部からは直接アクセスできない。
    //-------------結果として、悪意のあるユーザーによるデータベースの変更を防ぐ


    //一方、publicキーワードを使って宣言されたプロパティやメソッドは、クラスの内部からも、クラスの外部からも直接アクセスできます。
    //つまり、どの場所からでもアクセス可能
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
    ];
    //fillableで設定した値以外は、Laravelでは一括保存・更新処理から除外するようになっている。
    //ここにnullableをつけていないやつやtimestampsみたいな自動で勝手に入るやつ以外を除いて勝手に
    //されるやつ以外を書いておかないと、エラーになる
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Items extends Model
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
        'user_id',
        'name',
        'type',
        'detail',
        'status',
        'updated_by',
        'updated_at'
    ];
    //fillableで設定した値以外は、Laravelでは一括保存・更新処理から除外するようになっている。
    //ここにnullableをつけていないやつやtimestampsみたいな自動で勝手に入るやつ以外を除いて勝手に
    //されるやつ以外を書いておかないと、エラーになる
    public function category(){
        return $this->belongsTo(Categories::class);
    }
    public function user(){
        return $this->belongsTo(Users::class);
    }
    public function authuser(){
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($item) {
            $user = Auth::user();
            if ($user) {
                $item->updated_by = $user->id; // ログインユーザーのIDを設定
            }
        });
    }
}

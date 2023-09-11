<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言

class AuthController extends Controller
{
    //ログインページを出す
    public function showUserLoginPage()
    {
        $choices = Category::all();
        $items = Item::where('delete_flag', 0)->get();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('auth.login',compact('auth_users','items','login_user','choices'));
        //表示したいblade.phpファイルがresourcesのviewsから見て何らかのフォルダに入っている場合、
        // 上記のように.でつなげる。上ならviewsの中のauthフォルダの中のlogin.blade.phpを表示
    }

    /**
     * Display the specified resource.
     */
    public function showUserRegisterPage()
    {
        $choices = Category::all();
        $items = Item::where('delete_flag', 0)->get();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('auth.register',compact('auth_users','items','login_user','choices'));
        //表示したいblade.phpファイルがresourcesのviewsから見て何らかのフォルダに入っている場合、
        // 上記のように.でつなげる。上ならviewsの中のauthフォルダの中のlogin.blade.phpを表示
    }


}

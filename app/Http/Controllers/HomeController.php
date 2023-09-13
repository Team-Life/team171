<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言

class HomeController extends Controller
{

    /**
     * ホーム画面とかを映すやつ
     */
    public function showHome()
    {
        $choices = Category::all();
        $items = Item::where('delete_flag', 0)->get();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('home',compact('auth_users','items','login_user','choices'));
    }

    public function showDashboard()
    {
        $choices = Category::all();
        $items = Item::where('delete_flag', 0)->get();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('dashboard',compact('auth_users','items','login_user','choices'));
    }

    
}

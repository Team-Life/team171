<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言
use App\Models\Items;

class ItemsIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $items = Items::all();
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('index_items',compact('auth_users','items','login_user'));
        //表示したいblade.phpファイルがresourcesのviewsから見て何らかのフォルダに入っている場合、
        // 上記のように.でつなげる。上ならviewsの中のauthフォルダの中のlogin.blade.phpを表示
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

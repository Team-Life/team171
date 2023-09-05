<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言

class ItemsRegisterController extends Controller
{

    public function ShowItemsRegisterScreen()
    {
        $choices = Categories::all();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $items = Items::all();
        $login_user = Auth::user();//ログインユーザー情報を取得
        /**
         * Categoryモデルと紐付いた、Categoryテーブルからデータを全て取得
         *なぜか、ここでは::with('categories')->get();は使えない
         * **/
        return view('register_items',compact('choices','auth_users','items','login_user'));
    }

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
        //Request $requestの部分でフォームから送信されたデータを受け取る
        //最初のRequestは、use宣言で使われているillumiinate\Http\Requestを指している

        $validated = $request->validate([
            'name' => 'required',//バリデーション、requiredは必須入力
            'type' => 'required',
            'detail' => 'required|max:300'
            ]);

        //ログインユーザーの情報を取得
        $login_user = Auth::user();//// もしくは= $request->user();

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert = [
            'user_id' => $login_user->id,
            'name' => $validated['name'],
            'type' => $validated['type'],
            'detail' => $validated['detail'],
            //idとtimestampsは自動でなんとかしてくれるぽい
        ];

        //整理して作った$dataToInsertを挿入する
        $RegisteredItemPost = Items::create($dataToInsert);//ここのcreateはレコードを挿入するメソッド
        return back();/**->with('message','無事送信されました。')**/
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

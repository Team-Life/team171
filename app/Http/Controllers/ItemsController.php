<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemsUpdateRequest;
use App\Http\Request\RedirectResponse;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Http\RedirectResponse as HttpRedirectResponse;

class ItemsController extends Controller
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
    public function editorview(Request $request): View
    {
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        $registered_item_informations = Items::all();
        return view('layouts.items_info_edit.edit', [
            'inputIteminfo' => $request,
        ],compact('auth_users','login_user','registered_item_informations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    if ($request->isDirty('name') || $request->isDirty('type') || $request->isDirty('detail')||$request->isDirty('status')) {
        // モデルの更新時に updated_at タイムスタンプは自動的に更新されるため、ここでは設定不要
    }

    // モデルの更新処理を実行するコードを追加
    $request->save();
    // リダイレクトなどの適切なレスポンスを返す
    return Redirect::route('items.editor.view')->with('status','items-updated');
}
    // 具体的には、$request->isDirty('type')は、現在のリクエストで送信されたデータと、元のデータ
    // （通常、データベースから読み込まれたデータ）とを比較します。
    // そして、指定した属性（'type'）がリクエストデータと元のデータで異なる場合に true を返し、
    // 同じ場合には false を返します。

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

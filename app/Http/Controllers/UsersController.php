<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $validateduserinfo = $request->validate([
            'name' => 'required',//バリデーション、requiredは必須入力
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required|min:10',
            'role' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
            ]);

        //ログインユーザーの情報を取得
        $login_user = $request->user();//// もしくは= $request->user();

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert = [
            'user_id' => $login_user->id,
            'name' => $validateduserinfo['name'],
            'email' => $validateduserinfo['email'],
            'email_verified_at' => $validateduserinfo['email_verified_at'],
            'password' => $validateduserinfo['password'],
            'role' => $validateduserinfo['role'],
            'created_at' => $validateduserinfo['created_at'],
            'updated_at' => $validateduserinfo['updated_at'],
            //idとtimestampsは自動でなんとかしてくれるぽい
        ];

        //整理して作った$dataToInsertを挿入する
        $UsersInfoPost = Users::create($dataToInsert);//ここのcreateはレコードを挿入するメソッド
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

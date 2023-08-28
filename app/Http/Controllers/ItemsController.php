<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class ItemsController extends Controller
{

    public function ShowItemsRegisterScreen()
    {
        //$choices = Category::all();
        /**
         * Categoryモデルと紐付いた、Categoryテーブルからデータを全て取得
         * **/
        return view('register_items'/**,compact('choices')**/);
    }

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

        $validated = $request->validate([
            'name' => 'required',//バリデーション、requiredは必須入力
            'type' => 'required',
            'detail' => 'required|max:300'
            ]);

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert = [
            'name' => $validated['name'],
            'type' => $validated['type'],
            'detail' => $validated['detail'],
            //なんかどうやら、idとtimestampsは自動でなんとかしてくれる
        ];

        //整理して作った$dataToInsertを挿入する
        $RegisteredItemPost = Categories::create($dataToInsert);//ここのcreateはレコードを挿入するメソッド
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

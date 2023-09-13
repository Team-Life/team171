<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ItemsUpdateRequest;
use App\Http\Request\RedirectResponse;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use App\Rules\DataTypeMatch;
use Illuminate\Http\RedirectResponse as HttpRedirectResponse;

class ItemsController extends Controller
{//-------------------index_items.blade.phpに関する関数-----------------------------------
//検索機能はSearchControllerに記述
    public function index()
    {
        $choices = Category::all();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $items = Item::where('delete_flag', 0)->get();
        //なんかデータベースからデータを取り出す方法はall()や上記以外にもめっちゃあるらしいです
        // おおきくSQLクエリビルダとEloquent ORMに分かれる。上やall()は後者
        //::where('条件をつける対応するマイグレーションファイルに対応するテーブルのカラム','条件')->get();
        //itemsテーブルのdelete_flagカラムが0のレコード（行）のデータのみを全て取り出す。
        // たぶん、これが論理「削除」（＝データベースからデータを取り出す時点でソートすること？）


        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('index_items',compact('auth_users','items','login_user','choices'));
        //表示したいblade.phpファイルがresourcesのviewsから見て何らかのフォルダに入っている場合、
        // 上記のように.でつなげる。上ならviewsの中のauthフォルダの中のlogin.blade.phpを表示
    }

    /**
     * 商品一覧からの削除処理
     * @param Request $request
     * @param Items $item_id
     * @return Response
     */
    public function itemdestroy(Request $request, $id)
    {
        // テーブルから指定のIDのレコード1件を取得
        $item = Item::find($id);
        if (!$item) {
            // アイテムが存在しない場合の処理（エラー処理など）
            return redirect()->route('index_items.view'); // 一覧ページにリダイレクト
        }
        // レコードを削除
        $item->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('index_items.view');
    }
// ---------------------------- register_items.blade.php に関する関数-------------------------

/**
     *商品登録画面の表示
     * **/

        public function ShowItemsRegisterScreen()
    {
    $choices = Category::all();
    $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
    $items = Item::all();
    $login_user = Auth::user();//ログインユーザー情報を取得
    /**
          * Categoryモデルと紐付いた、Categoryテーブルからデータを全て取得
          *なぜか、ここでは::with('categories')->get();は使えない
          * **/
        return view('register_items',compact('choices','auth_users','items','login_user'));
    }

    /**
      * 商品のデータベースへの登録機能の関数
      */
        public function store(Request $request)
    {
         //Request $requestの部分でフォームから送信されたデータを受け取る
         //最初のRequestは、use宣言で使われているillumiinate\Http\Requestを指している

        $validated = $request->validate([
            'name' => 'required|max:100|string',//バリデーション、requiredは必須入力
            'type' => 'required|Integer',
            'detail' => 'required|max:500'
            ]);

         //ログインユーザーの情報を取得
        $login_user = Auth::user();//// もしくは= $request->user();

         //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert = [
        'user_id' => $login_user->id,
        'name' => $validated['name'],
        'type' => $validated['type'],
        'detail' => $validated['detail'],
        'updated_by' => $login_user->id,
             //idとtimestampsは自動でなんとかしてくれるぽい
        ];


         //整理して作った$dataToInsertを挿入する
        $RegisteredItemPost = Item::create($dataToInsert);//ここのcreateはレコードを挿入するメソッド
        return back()->with('message','無事登録されました');
    }


    // public function rules1()
    // {
    //     return [
    //         'name' => ['required',new DataTypeMatch('string', ':data_type_match')],//バリデーション、requiredは必須入力
    //         'type' => ['required',new DataTypeMatch('smallInteger', ':data_type_match')],
    //         'detail' => ['required|max:500',new DataTypeMatch('string', ':data_type_match')]
    //     ];
    // }



//----------------------------show_each_item.blade.phpに関する関数------------------------------------------------------

    // 個別表示機能追加

    public function ShowEachItem1(Item $item){
        $choices = Category::all();
        // 関数の中の第一引数は、タイプヒント（引数の型を指定するもの  ※モデル名を書いて引数の型を制限
        // 第二引数の名前は任意でいいが、おそらくRoute設定のパラメータ名と一致させる必要がある）
        // おそらく、$itemはItemsモデルのインスタンスにあたる。
        // これを書いた時点で$itemのidをデータベースに受け渡し、
        // 該当の$itemレコードを取得という流れが設定されたことになるらしい（依存注入という）。
        return view('show_each_item',compact('item','choices'));
        // ※$itemを渡しているのは、show_each_item.blade.phpであることに注意
    }

    // // 同じ意味だが、次の書き方の場合、おそらくRoute設定の自由はきく
    // public function ShowEachItem2($id){
    //     // idをもとにItemsモデルと紐付いたitemsテーブルから各レコードを取得
    //     $item = Item::find($id);
    //     return view('show_each_item',compact('item'));
    // }これを使う場合、routeメソッドを使う場合、route('',$item->id)にする必要があると思われる

// ---------------------------ItemsInfoEditフォルダのedit.blade.phpに関する関数--------------------------------------

        /**
     * 商品詳細・編集画面の表示（ProfileControllerを真似しつつ、Laravelの教科書を参考に作成。下枠の注意書きに注意）
     */
    public function editorview($id)
    {
        $choices = Category::all();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        $registered_item_informations = Item::all();
        return view('ItemsInfoEdit.edit',compact('auth_users','login_user','registered_item_informations','choices'));
    }
    // ---------------------------------------------------------------------------------------------------------------------------
    // ここで変数にidを指定しているので、この関数に対する{{ route('items.editor.view',$item->id) }}の「->id」がないとエラーになる
    // なお、上のcompact内に$itemないが、渡したbladeでregistered_item_informationsを@foreach( )で as $itemとしているので使える
    // --------------------------------------------------------------------------------------------------------------------------
        /**
     * 商品詳細・編集画面の表示（ProfileControllerを真似しつつ、Laravelの教科書を参考に作成。上の注意書き、
     * タイプヒントに注意）
     */
    //updateメソッドでは、引数はRequest $requestと
    public function update(Request $request, Item $item)
    {

        // 更新データの連想配列を作成
        $validated = $request->validate([
            'name' => 'required|max:100|string',//バリデーション、requiredは必須入力
            'type' => 'required|Integer',//migrationファイルのデータ型を参照
            'detail' => 'required|max:500',
            'delete_flag' => 'required|boolean'
        ]);

        $validated['updated_by'] = auth()->id(); // ログインユーザーidを取得する
        //おそらく、これでログインしている人（＝編集者）のidを代入になっているはず

        // モデルを取得し、条件に一致するレコードを更新
        // ここでは、例として id カラムが $request->input('id') に一致するレコードを更新すると仮定しています。
        $item->update($validated);//<--updateメソッドで更新

        //なお、更新後は、updated_atは自動的に更新されるため、上記の関数内にnow()などを記述する必要はない

        // $request->session();
        return back()->with('message','商品情報の更新をしました。');
                        //更新後のメッセージを$messageでbladeに渡す
    }


    // public function rules2()
    // {
    //     return [
    //         'name' => ['required',new DataTypeMatch('string', ':data_type_match')],//バリデーション、requiredは必須入力
    //         'type' => ['required',new DataTypeMatch('smallInteger', ':data_type_match')],
    //         'detail' => ['required|max:500',new DataTypeMatch('string', ':data_type_match')],
    //         'delete_flag' => ['required',new DataTypeMatch('boolean', ':data_type_match')]
    //     ];
    // }
}

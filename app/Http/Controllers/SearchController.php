<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Users;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function SearchAndIndex(Request $request)
    {
        $choices = Category::all();
        $items = Item::where('delete_flag', 0)->get();
        $auth_users = Users::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        $searchTerm = $request->input('searchTerm');

        // データベースの3つのカラムを対象にあいまい検索を実行
        $search_results = Item::where('name', 'like', "%$searchTerm%")
                            ->orWhere('detail', 'like', "%$searchTerm%")
                            ->orWhere('type', 'like', "%$searchTerm%")
                            ->get();//->get()で一気に取得
        $count_search_results = Item::where('name', 'like', "%$searchTerm%")
                                ->orWhere('detail', 'like', "%$searchTerm%")
                                //orWhereはたぶんorだし、またはこれを検索結果に含めるの意味
                                ->orWhere('type', 'like', "%$searchTerm%")
                                ->count();//->count()で取得したレコードの数を数える

        return view('searched_index_items', compact('search_results','count_search_results','auth_users','items','login_user','choices'));
    }

}

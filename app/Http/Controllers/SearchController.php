<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function SearchAndIndex(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        // データベースの3つのカラムを対象にあいまい検索を実行
        $search_results = Items::where('name', 'like', "%$searchTerm%")
                            ->orWhere('detail', 'like', "%$searchTerm%")
                            ->orWhere('type', 'like', "%$searchTerm%")
                            ->get();//->get()で一気に取得
        $count_search_results = Items::where('name', 'like', "%$searchTerm%")
                                ->orWhere('detail', 'like', "%$searchTerm%")
                                //orWhereはたぶんorだし、またはこれを検索結果に含めるの意味
                                ->orWhere('type', 'like', "%$searchTerm%")
                                ->count();//->count()で取得したレコードの数を数える

        return view('searched_index_items', compact('search_results','count_search_results'));
    }

}

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
    $item = Items::all();
    $searchTerm = $request->input('searchTerm');

    // データベースの3つのカラムを対象にあいまい検索を実行
    $search_results = Items::where('name', 'like', "%$searchTerm%")
                        ->orWhere('detail', 'like', "%$searchTerm%")
                        ->orWhere('type', 'like', "%$searchTerm%")
                        ->get();

    return view('searched_index_items', compact('search_results','item'));
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

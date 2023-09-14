<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.main_nav')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="index-items-outerwrap" style="margin-left: auto; margin-right:5%;margin-bottom:1rem;">
        <div class="index-items-innerwrap sm:px-6 lg:px-8" style="margin-left: auto; margin-right:5%;margin-bottom:1rem;">
            <div class="flex">
                <div class="search_count container" >
                    <p style="font-size:1rem;">検索されたキーワードを含む商品は、全部で <strong style="font-size:2rem;">{{ $count_search_results }}</strong>件です。</p>
                </div>
                @include('layouts.categories_dropdown')
            </div>
            <table class="index_table table table-striped table-hover table-bordered" style="margin-bottom:1rem;">
                <thead>
                        <tr>
                        <th scope="col" class="col_id">ID</th>
                        <th scope="col" class="col_name">名前</th>
                        <th scope="col" class="col_category">{{ 'タイプ:カテゴリ' }} </th>
                        <th scope="col" class="col_detail">詳細</th>
                        <th scope="col" class="col_button"></th>
                        </tr>
                </thead>
                <tbody>
                    @foreach( $search_results as $search_result )
                    <tr>
                    <th scope="row" class="col_id">{{ $search_result->id }}</th>
                    <td class="col_name">{{ $search_result->name }}</td>
                    <td class="col_category">{{ $search_result->type }}</td>
                    <td class="col_detail">{{ $search_result->detail }}</td>
                    <td class="col_button">
                        <div class="btn_part">
                            <a href="{{ route('items.editor.view',$search_result->id) }}" class="block">
                                {{-- 上記のroute(,)では第二引数を->idとするのが講師の先生に聞くまで分からず --}}
                                <x-primary-button>
                                    編集
                                </x-primary-button>
                            </a>
                            <form action="{{ route('item.destroy', ['id' => $search_result->id]) }}" class="block" method="post">
                                            {{-- itemsテーブルのidカラムを取り出す --> --}}
                            @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                            @method('DELETE')
                                <x-primary-button id="delete-item_id-{{ $search_result->id }}">削除</x-primary-button>
                                <input type="hidden" class="" name="item_id" value="{{ $search_result->id }}">
                            </form>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="index-items-outerwrap">
        <div class="index-items-innerwrap mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="search_count container" >
                    <p>検索されたキーワードを含む商品は、全部で <strong>{{ $count_search_results }}</strong>件です。</p>
                </div>
                @include('layouts.categories_dropdown')
            </div>
            <table class="index_table table table-striped table-hover table-bordered">
                <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">名前</th>
                        <th scope="col">カテゴリ</th>
                        <th scope="col">詳細</th>
                        <th scope="col"></th>
                        </tr>
                </thead>
                <tbody>
                    @foreach( $search_results as $search_result )
                    <tr>
                    <th scope="row">{{ $search_result->id }}</th>
                    <td>{{ $search_result->name }}</td>
                    <td>{{ $search_result->type }}</td>
                    <td>{{ $search_result->detail }}</td>
                    <td>
                        <div class="btn_part flex">
                            <a href="{{ route('items.editor.view',$item->id) }}" class="block">
                                <x-primary-button>
                                    編集
                                </x-primary-button>
                            </a>
                            <form action="{{ route('item.destroy', ['id' => $search_result->id]) }}" class="block" method="post">
                                            {{-- itemsテーブルのidカラムを取り出す --> --}}
                            @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                            @method('DELETE')
                                <button type="submit" id="delete-item_id-{{ $search_result->id }}" class="btn btn-outline-primary">削除</button>
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
</x-app-layout>


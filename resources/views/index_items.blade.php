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
        <div class="index-items-innerwrap sm:px-6 lg:px-8">
            <div class="flex">
                <div class="search_box">
                    <form class="search_form" method="post" action="{{ route('searched.items.index') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="searchTerm" placeholder="検索キーワードを入力">
                        {{-- ここでname="searchTerm"となっているので、ここで入力した値がinput('searchTerm')が定義された値がpostされて、actionのSearchControllerに --}}
                        {{-- とんでいると思われる --}}
                        <x-primary-button style="padding: 0.5rem;">
                            検索
                        </x-primary-button>
                    </form>
                </div>
                @include('layouts.categories_dropdown')
            </div>
            <table class="index_table table table-striped table-hover table-bordered" style="margin-bottom:1rem;">
                <thead>
                        <tr>
                        <th scope="col" class="col_id">ID</th>
                        <th scope="col" class="col_name">名前</th>
                        <th scope="col" class="col_category">{{ 'タイプ:カテゴリ' }}</th>
                        <th scope="col" class="col_detail">詳細</th>
                        <th scope="col" class="col_button"></th>
                        </tr>
                </thead>
                <tbody>
                    @foreach( $items as $item )
                    <tr>
                    <th scope="row" class="col_id">{{ $item->id }}</th>
                    <td class="col_name">
                        <a href="{{ route('showeach.item.view', $item) }}" class="showeachlink">
                        {{-- route(,)の第二引数は{item}というパラメータを「受け取る」設定 --}}
                        {{-- $itemはforeachのasの後ろとも一致させないとエラーになる --}}
                        {{ $item->name }}
                        </a>
                    </td>
                    <td class="col_category">{{ $item->type }}</td>
                    <td class="col_detail">{{ $item->detail }}</td>
                    <td class="col_button">
                        <div class="btn_part">
                        <a href="{{ route('items.editor.view',$item->id) }}" class="block">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                        <form action="{{ route('item.destroy', ['id' => $item->id]) }}" method="POST" class="block">
                        {{-- itemテーブルのidカラムを取り出す --}}
                        @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                        @method('DELETE')
                            <x-primary-button id="delete-item_id-{{ $item->id }}">削除</x-primary-button>
                            <input type="hidden" class="" name="item_id" value="{{ $item->id }}">
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


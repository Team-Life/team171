<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="index-items-outerwrap">
        <div class="index-items-innerwrap mx-auto sm:px-6 lg:px-8">
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
                    @foreach( $items as $item )
                    <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td><a href="{{ route('showeach.item.view', $item) }}" class="showeachlink">
                        {{-- route(,)の第二引数は{item}というパラメータを「受け取る」設定 --}}
                        {{-- $itemはforeachのasの後ろとも一致させないとエラーになる --}}
                        {{ $item->name }}
                        </a>
                    </td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->detail }}</td>
                    <td>
                        <div class="btn_part flex">
                        <a href="{{ route('items.editor.view',$item->id) }}" class="block">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                        <form action="{{ route('item.destroy', ['id' => $item->id]) }}" method="POST" class="block">
                        {{-- itemテーブルのidカラムを取り出す --}}
                        @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                        @method('DELETE')
                            <button type="submit" id="delete-item_id-{{ $item->id }}" class="btn btn-outline-primary">削除</button>
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
</x-app-layout>


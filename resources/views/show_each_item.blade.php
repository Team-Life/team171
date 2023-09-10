<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="index-items-outerwrap">
        <div class="index-items-innerwrap mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="each_item_show container" >
                    <p>個別表示</p>
                </div>
                @include('layouts.categories_dropdown')
            </div>
            <table class="index_table table table-striped table-hover table-bordered">
                <thead>
                        <tr>
                        <th scope="col" class="col_id">ID</th>
                        <th scope="col" class="col_name">名前</th>
                        <th scope="col" class="col_category">カテゴリ</th>
                        <th scope="col" class="col_detail">詳細</th>
                        <th scope="col" class="col_button"></th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td class="col_id">{{ $item->name }}</td>
                    <td class="col_name">{{ $item->type }}</td>
                    <td class="col_category">{{ $item->detail }}</td>
                    <td class="col_button">
                        <div class="btn_part flex">
                            <a href="{{ route('items.editor.view',$item->id) }}" class="block">
                                <x-primary-button>
                                    編集
                                </x-primary-button>
                            </a>
                            <form action="{{ route('item.destroy', ['id' => $item->id]) }}" method="post" class="block">
                                            {{-- itemsテーブルのidカラムを取り出す --> --}}
                            @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                            @method('DELETE')
                                <button type="submit" id="delete-item_id-{{ $item->id }}" class="btn btn-outline-primary">削除</button>
                                <input type="hidden" class="" name="item_id" value="{{ $item->id }}">
                            </form>
                        </div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>


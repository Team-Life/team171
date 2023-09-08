<x-app-layout>
    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>
        {{-- ここに入力したものは、resourceのlayoutsフォルダの中のapp.blade.phpの
            {{ slot }}のところに挿入され、「app.blade.php」が表示される--}}

    <div class="index-items-outerwrap">
        <div class="index-items-innerwrap mx-auto sm:px-6 lg:px-8">
            <table class="table table-striped table-hover">
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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->detail }}</td>
                    <td>
                        <form action="{{ route('item.destroy', ['id' => $item->id]) }}" method="POST"><!-- itemテーブルのidカラムを取り出す -->
                        @csrf   {{-- ←の@csrfがないとPOSTできない --}}
                        @method('DELETE')
                            <button type="submit" id="delete-item_id-{{ $item->id }}" class="btn btn-outline-primary">削除</button>
                            <input type="hidden" class="" name="item_id" value="{{ $item->id }}">
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>


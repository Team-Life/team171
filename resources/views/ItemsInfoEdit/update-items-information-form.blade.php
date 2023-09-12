<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
                {{ '商品情報詳細・商品情報編集（Items Information detail & edit）' }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
                {{ '管理者アカウントのみ、商品情報論理削除用のdelete_flagの値を編集できます' }}
        </p>
    </header>

    <form method="post" action="{{ route('items.info.update', $item) }}" class="mt-6 space-y-6" >
        {{-- route('')の行き先はupdateのメソッドの方、第二引数は、おそらく個別の表示の時と同様に統一する必要がある --}}
        @csrf
        @method('patch')

        <div>
            <label for="id">{{ __('商品登録番号（Items id）') }}</label>
            <x-text-input id="id" name="id" type="text" class="mt-1 block w-full" :value="old('id', $item->id)"  />
            <x-input-error class="mt-2" :messages="$errors->get('id')" />
        </div>
        @error('id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="name">{{ __('商品名（Items Name）') }}</label>
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $item->name)" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="type">{{ __('商品種別（Category Number）') }}</label>
            <x-text-input id="type" name="type" type="text" class="mt-1 block w-full" :value="old('type', $item->type)" />
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="detail">{{ __('商品詳細（Items Detail）') }}</label>
            <x-text-input id="detail" name="detail" type="text" class="mt-1 block w-full" :value="old('detail', $item->detail)" />
            <x-input-error class="mt-2" :messages="$errors->get('detail')" />
        </div>
        @error('detail')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="delete_flag">{{ __('（論理）削除フラグ（delete_flag）') }}</label>
            <x-text-input id="delete_flag" name="delete_flag" type="text" class="mt-1 block w-full" :value="old('delete_flag', $item->delete_flag)" />
            <x-input-error class="mt-2" :messages="$errors->get('delete_flag')" />
        </div>
        @error('delete_flag')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="flex items-center gap-4">
            <x-primary-button class='edit_save_btn'>
                更新
            </x-primary-button>
        </div>
    </form>

</section>

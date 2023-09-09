<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
                {{ '商品情報詳細・商品情報編集（Items Information detail & edit）' }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
                {{ '管理者アカウントのみ、商品情報・論理削除用の真偽値を編集できます' }}
        </p>
    </header>

    <form method="post" action="{{ route('items.info.update', $information) }}" class="mt-6 space-y-6" >
        @csrf
        @method('patch')

        <div>
            <label for="item_id">{{ __('商品登録番号（Items id）') }}</label>
            <x-text-input id="item_id" name="edited_id" type="text" class="mt-1 block w-full" :value="old('id', $information->id)"  />
            <x-input-error class="mt-2" :messages="$errors->get('id')" />
        </div>

        <div>
            <label for="item_edited_name">{{ __('商品名（Items Name）') }}</label>
            <x-text-input id="item_edited_name" name="edited_name" type="text" class="mt-1 block w-full" :value="old('name', $information->name)" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="item_edited_type">{{ __('商品種別（Category Number）') }}</label>
            <x-text-input id="item_edited_type" name="edited_type" type="text" class="mt-1 block w-full" :value="old('type', $information->type)" />
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>

        <div>
            <label for="item_edited_detail">{{ __('商品詳細（Items Detail）') }}</label>
            <x-text-input id="item_edited_detail" name="edited_detail" type="text" class="mt-1 block w-full" :value="old('detail', $information->detail)" />
            <x-input-error class="mt-2" :messages="$errors->get('detail')" />
        </div>

        <div>
            <label for="item_edited_status">{{ __('商品を表示するかどうか（Items Status）') }}</label>
            <x-text-input id="item_delete_flag" name="edited_delete_flag" type="text" class="mt-1 block w-full" :value="old('delete_flag', $information->delete_flag)" />
            <x-input-error class="mt-2" :messages="$errors->get('status')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class='edit_save_btn'>保存</x-primary-button>

            @if (session('status') === 'items-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >保存しました。</p>
            @endif
        </div>
    </form>

</section>

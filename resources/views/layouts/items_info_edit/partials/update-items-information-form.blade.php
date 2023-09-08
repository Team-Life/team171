<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
                {{ '商品情報詳細・商品情報編集（Items Information detail & edit）' }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
                {{ '管理者アカウントのみ、商品情報・論理削除用の真偽値を編集できます' }}
        </p>
    </header>

    <form method="post" action="{{ route('items.info.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        @foreach ($registered_item_informations as $info)

        <div>
            <label for="item_edited_name">{{ __('商品名（Items Name）') }}</label>
            <x-text-input id="item_edited_name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $info->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="item_edited_type">{{ __('商品種別（Category Number）') }}</label>
            <x-text-input id="item_edited_type" name="type" type="text" class="mt-1 block w-full" :value="old('type', $info->type)" required autofocus autocomplete="type" />
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>

        <div>
            <label for="item_edited_detail">{{ __('商品詳細（Items Detail）') }}</label>
            <x-text-input id="item_edited_detail" name="detail" type="text" class="mt-1 block w-full" :value="old('detail', $info->detail)" required autofocus autocomplete="detail" />
            <x-input-error class="mt-2" :messages="$errors->get('detail')" />
        </div>

        <div>
            <label for="item_edited_status">{{ __('商品を表示するかどうか（Items Status）') }}</label>
            <x-text-input id="item_edited_status" name="status" type="text" class="mt-1 block w-full" :value="old('status', $info->status)" required autofocus autocomplete="status" />
            <x-input-error class="mt-2" :messages="$errors->get('status')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>保存</x-primary-button>

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
        @endforeach
    </form>

</section>

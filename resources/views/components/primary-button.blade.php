<button {{ $attributes->merge(['type' => 'submit', 'class' => 'p-2 inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
{{-- 上の$attributes->mergeというのは、おそらく
    後ろの配列の形でそのタグ内にオプションを付与すると意味だと思っています--}}

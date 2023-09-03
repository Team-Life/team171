<x-app-layout>
    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_was')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
        <div class="main innerwrap">
            <div>
                <h2 class="introduce leading-relaxed">{{ '先生方の御指導の下、以下のようなWebページの素材となる画像を Illustratorや Photoshopを使って作る練習を重ねました。' }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-7">
                    <div class="scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                                    from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="WasWorks WasCafePoster rounded-full">
                            <img src="{{ asset('/images/was-works/fictitious_cafe_poster.png') }}" alt="架空のカフェのポスター">
                            <h2 class="font-semibold text-black-900 leading-relaxed">
                            <p style="text-indent:-1rem;">〇fictitious_cafe_poster</p><br>　WASの校舎を架空のカフェに見立て、その開店ポスターを作りました。<br>（Photoshop,Illustratorを使って作成）
                            </h2>
                        </div>
                    </div>

                    <div class="scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                                    from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="WasWorks ReproductionWASMap rounded-full">
                            <img src="{{ asset('/images/was-works/simplified_map_reproduction.png') }}" alt="WAS周辺の簡略な地図の模写">
                            <h2 class="font-semibold text-black-900 leading-relaxed">
                            <p style="text-indent:-1rem;">〇simplified_map<br>reproduction</p><br>　WAS周辺の簡略な地図の模写<br>（Illustratorを使って作成）</p>
                            </h2>
                        </div>
                    </div>

                    <div class="scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                        from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                        motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="WasWorks CoffeeSegmentEx rounded-full">
                            <img src="{{ asset('/images/was-works/coffee_customer_segment_suggestion_ex.png') }}" alt="コーヒーの顧客セグメント">
                            <h2 class="font-semibold text-black-900 leading-relaxed">
                            <p style="width:100%;">〇coffee_customer<br>segment_suggestion_ex</p>
                            <br>コーヒーの新商品開発をする場合に、どのような顧客セグメントがあるかブレーンストーミングするときに使われるような補助資料<br>（Photoshop,Illustratorを使って作成）
                            </h2>
                        </div>
                    </div>

                    <div class="scale-100  bg-white dark:bg-gray-800 dark:bg-gradient-to-bl
                            from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
                                motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="WasWorks FictitiousFashionGoodsShop rounded-full">
                            <img src="{{ asset('/images/was-works/fashion_center_yamamura_poster_suggestion_ex.png') }}" alt="仮想の衣服店のチラシ">
                            <h2 class="font-semibold text-black-900 leading-relaxed">
                            <p style="text-indent:-1rem;">〇fictitious clothing store ads</p><br>　架空の衣服店の広告<br>（Photoshop,Illustratorを使って作成）
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>

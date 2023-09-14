<x-app-layout>

    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.main_nav')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>

    <div style="padding-top: 3rem;padding-bottom: 200%;margin-bottom:20%;">
        <div class="max-w-7xl sm:px-6 lg:px-8 space-y-6" style="margin-left: auto; margin-right:5%;">
            @foreach ($registered_item_informations as $item)
            <div class="edit_part p-4 sm:p-8 bg-white shadow sm:rounded-lg flex" style="opacity: 0.8;">
                <div class="item_edit_area">
                    @include('ItemsInfoEdit.update-items-information-form')
                </div>
                <div class="categories_table_area">
                <table class="table table-primary table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">type</th>
                            <th scope="col">Category_name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($choices as $choice)
                        <tr>
                            <th scope="row">{{ $choice->type }}</th>
                            <td>{{ $choice->category_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

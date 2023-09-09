<x-app-layout>

    <x-slot name="header">
        @include('layouts.navigations.main_nav')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($registered_item_informations as $information)
            <div class="edit_part p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('ItemsInfoEdit.update-items-information-form')
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

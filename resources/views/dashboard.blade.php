<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table-fixed border border-black">
                    <thead>
                        {{ __("April") }}
                    </thead>
                    <tr class="p-10 m-10 border-black">
                        <td class="p-10 m-10 border-black">1                
                             <x-post>
                            </x-post>
                        </td>
                        <td class="p-10 m-10 border-black">2</td>
                        <td class="p-10 m-10 border-black">3</td>
                        <td class="p-10 m-10 border-black">4</td>
                        <td class="p-10 m-10 border-black">5</td>
                        <td class="p-10 m-10 border-black">6</td>
                        <td class="p-10 m-10 border-black">7</td>
                    </tr>
            </div>
        </div>
    </div>
</x-app-layout>

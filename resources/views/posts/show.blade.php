<x-app-layout>
    <div class="container max-w-2xl mx-auto mt-4">
        <div class="flex flex-col">
            <div class="bg-white rounded shadow-md px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                <!-- Using post component -->
                <x-post>
                    <x-slot name="post">
                        {{ __('post here') }}
                    </x-slot>
                </x-post>
</x-app-layout>
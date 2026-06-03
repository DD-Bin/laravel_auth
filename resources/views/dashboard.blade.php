<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black font-medium">
                    <p class="text-lg font-bold mb-4">{{ __("You're logged in!") }}</p>
                    <p class="mb-2">Nama: {{ Auth::user()->name }}</p>
                    <p>No. HP: {{ Auth::user()->no_hp }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

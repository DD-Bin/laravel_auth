<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-black">
                <h3 class="text-lg font-bold mb-4">Daftar Semua Pengguna (Tugas 3)</h3>
                
                <table class="w-full border-collapse border border-gray-400">
                    <thead>
                        <tr class="bg-gray-200 text-black">
                            <th class="border border-gray-400 p-2 text-left">Nama</th>
                            <th class="border border-gray-400 p-2 text-left">Email</th>
                            <th class="border border-gray-400 p-2 text-left">No. HP</th>
                            <th class="border border-gray-400 p-2 text-left">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="text-black font-medium">
                            <td class="border border-gray-400 p-2">{{ $user->name }}</td>
                            <td class="border border-gray-400 p-2">{{ $user->email }}</td>
                            <td class="border border-gray-400 p-2">{{ $user->no_hp }}</td>
                            <td class="border border-gray-400 p-2">
                                <span class="px-2 py-1 rounded text-xs {{ $user->role === 'admin' ? 'bg-red-200 text-red-800' : 'bg-blue-200 text-blue-800' }}">
                                    {{ strtoupper($user->role) }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
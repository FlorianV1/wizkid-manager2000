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
                <h3 class="text-lg font-medium">Users</h3>
                <ul>
                    @foreach ($users as $user)
                        <li class="flex justify-between items-center py-2">
                            <div>
                                <span class="font-bold">{{ $user->name }}</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</span>
                            </div>
                            @if (auth()->user()->role == 'staff')
                            <div>
                                <a href="{{ route('wizkids.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <a href="{{ route('wizkids.delete', $user->id) }}" class="text-red-500 hover:text-red-700">Delete</a>
                            </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>

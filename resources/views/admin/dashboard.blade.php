<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Overview</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-blue-800">Practice Sessions</h4>
                            <p class="text-2xl font-bold text-blue-900">{{ $practiceSessionsCount }}</p>
                            <a href="{{ route('admin.practice-sessions.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Manage</a>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-green-800">Articles</h4>
                            <p class="text-2xl font-bold text-green-900">{{ $articlesCount }}</p>
                            <a href="{{ route('admin.articles.index') }}" class="text-green-600 hover:text-green-800 text-sm">Manage</a>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-purple-800">Users</h4>
                            <p class="text-2xl font-bold text-purple-900">{{ $usersCount }}</p>
                            <a href="{{ route('admin.users.index') }}" class="text-purple-600 hover:text-purple-800 text-sm">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

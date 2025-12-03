<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Practice Session Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Practice Session: {{ $practiceSession->title }}</h3>

                    <div class="mb-4">
                        <strong>Day:</strong> {{ $practiceSession->day }}
                    </div>

                    <div class="mb-4">
                        <strong>Title:</strong> {{ $practiceSession->title }}
                    </div>

                    <div class="mb-4">
                        <strong>Description:</strong>
                        <p>{{ $practiceSession->description }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Tips:</strong>
                        <p>{{ $practiceSession->tips }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Created At:</strong> {{ $practiceSession->created_at->format('M d, Y H:i') }}
                    </div>

                    <div class="mb-4">
                        <strong>Updated At:</strong> {{ $practiceSession->updated_at->format('M d, Y H:i') }}
                    </div>

                    <div class="flex space-x-4">
                        <a href="{{ route('admin.practice-sessions.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to List
                        </a>
                        <a href="{{ route('admin.practice-sessions.edit', $practiceSession) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

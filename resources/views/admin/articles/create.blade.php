<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Article') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="content" :value="__('Content')" />
                        <textarea id="content" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="content" rows="10" required>{{ old('content') }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Image')" />
                        <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="video" :value="__('Video')" />
                        <input id="video" class="block mt-1 w-full" type="file" name="video" accept="video/*" />
                        <x-input-error :messages="$errors->get('video')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('admin.articles.index') }}" class="mr-4 text-gray-600 hover:text-gray-900">Cancel</a>
                        <x-primary-button>
                            {{ __('Create Article') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

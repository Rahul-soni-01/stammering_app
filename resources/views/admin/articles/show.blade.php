<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article Details') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="mb-4">
                    <a href="{{ route('admin.articles.index') }}" class="text-blue-600 hover:text-blue-900">← Back to Articles</a>
                </div>

                <h3 class="text-2xl font-bold mb-4">{{ $article->title }}</h3>

                <div class="mb-4">
                    <strong>ID:</strong> {{ $article->id }}
                </div>

                <div class="mb-4">
                    <strong>Created At:</strong> {{ $article->created_at->format('M d, Y H:i') }}
                </div>

                <div class="mb-4">
                    <strong>Content:</strong>
                    <div class="mt-2 p-4 bg-gray-50 rounded">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </div>

                @if($article->image)
                    <div class="mb-4">
                        <strong>Image:</strong>
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image" class="max-w-full h-auto rounded">
                        </div>
                    </div>
                @endif

                @if($article->video)
                    <div class="mb-4">
                        <strong>Video:</strong>
                        <div class="mt-2">
                            <video controls class="max-w-full h-auto rounded">
                                <source src="{{ asset('storage/' . $article->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                @endif

                <div class="mt-6">
                    <a href="{{ route('admin.articles.edit', $article) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Edit Article
                    </a>
                    <form method="POST" action="{{ route('admin.articles.destroy', $article) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this article?')">
                            Delete Article
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

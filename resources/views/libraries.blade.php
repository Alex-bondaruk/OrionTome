@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sidebar -->
            <aside class="md:col-span-1 bg-gray-100 p-6 rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Categories</h2>
                <ul class="space-y-2">
                     @foreach($categories as $category)
                        <li>
                            <a href="libraries/?category_id={{ $category->id }}"
                            class="text-gray-600 hover:text-gray-800">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
            <!-- Main Content -->
            <main class="md:col-span-2">
                <h1 class="text-3xl font-bold mb-4">Welcome to OrionTome</h1>
                <p class="mb-6">Your base of knowledge. Explore our growing library of resources across a variety of categories.</p>
                <!-- Library Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($posts as $post)
                        <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                            <div class="w-24 h-24 bg-gray-200 rounded mb-4 flex items-center justify-center overflow-hidden">
                                <span class="text-gray-400 text-4xl">📚</span>
                            </div>
                            <h3 class="text-lg font-semibold mb-2">
                                <a href="{{ route('post.show', $post->id) }}" class="text-gray-800 hover:text-gray-900">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            @if (!empty($post->content))
                              @if(Str::length($post->content) > 50)
                                <p class="text-gray-600 text-center">{{ Str::limit($post->content, 50, '...') }}</p>
                              @else
                                <p class="text-gray-600 text-center">{{ $post->content }}</p>
                              @endif
                            @endif
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
        <!-- Related Articles & Popular Tags in One Row -->
        <section class="bg-white p-6 rounded-lg shadow flex flex-col h-full w-full">
            <h2 class="text-xl font-semibold mb-4">Related Articles</h2>
            <div class="space-y-4 flex-1">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-gray-200 rounded overflow-hidden flex items-center justify-center">
                        <span class="text-gray-400 text-2xl">🖼️</span>
                    </div>
                    <span>How to Use the Python Standard Library</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-gray-200 rounded overflow-hidden flex items-center justify-center">
                        <span class="text-gray-400 text-2xl">🖼️</span>
                    </div>
                    <span>Understanding ES6 Features</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-gray-200 rounded overflow-hidden flex items-center justify-center">
                        <span class="text-gray-400 text-2xl">🖼️</span>
                    </div>
                    <span>Key Events in World History</span>
                </div>
            </div>
        </section>
        <section class="bg-white p-6 rounded-lg shadow flex flex-col h-full w-full">
            <h2 class="text-xl font-semibold mb-4">Popular Tags</h2>
            <div class="flex flex-wrap gap-2 flex-1 items-start">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">python</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">javascript</span>
                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">science</span>
                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">history</span>
                <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm">art</span>
            </div>
        </section>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<main class="container mx-auto mt-6 flex justify-center">
        <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
            <p class="mt-4 text-lg text-gray-600">{{ $post->content }}</p>
        </section>
    </main>
@endsection
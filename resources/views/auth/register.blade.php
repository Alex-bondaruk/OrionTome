@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input id="name" type="text" name="name" class="w-full border rounded px-3 py-2 mt-1" required autofocus>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input id="email" type="email" name="email" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input id="password" type="password" name="password" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="w-full border rounded px-3 py-2 mt-1" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Register</button>
    </form>
</div>
@endsection

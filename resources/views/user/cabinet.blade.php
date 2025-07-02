@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">User Cabinet</h2>
    <div class="mb-4">
        <strong>Name:</strong> {{ Auth::user()->name }}
    </div>
    <div class="mb-4">
        <strong>Email:</strong> {{ Auth::user()->email }}
    </div>
    <div class="mb-6">
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="text-red-600 hover:underline">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>
@endsection

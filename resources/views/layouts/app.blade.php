<!DOCTYPE html>
<html lang="en">
<head>
    @include('blocks.head')
</head>
<body>
    @include('blocks.header.header')

    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('blocks.footer.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html
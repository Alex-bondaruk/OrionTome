<footer class="bg-gray-900 text-white">
    <div class="bg-blue-600 py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <h2 class="text-2xl font-bold mb-4 md:mb-0">Ready to get started?</h2>
                <a href="#" class="inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded shadow hover:bg-blue-50 transition">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="py-10">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center md:justify-between gap-8">
            <div class="mb-6 md:mb-0">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-footer.svg') }}" alt="Company Logo" class="h-10">
                </a>
            </div>
            <nav>
                <ul class="flex flex-col md:flex-row gap-4 md:gap-8 text-gray-300">
                    <li><a href="{{ url('/') }}" class="hover:text-white transition">Home</a></li>
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="bg-gray-800 py-4">
        <div class="container mx-auto px-4 text-center text-gray-400 text-sm">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </div>
    </div>
</footer>

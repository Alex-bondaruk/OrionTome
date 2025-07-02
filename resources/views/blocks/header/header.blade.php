<header class="max-w-7xl mx-auto px-8 py-4">
    <div class="header flex items-center gap-4">
        <div class="header__logo w-20 h-20">
            <a href="/">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Orion Tome Logo" />
            </a>
        </div>
        @include('blocks.nav')
    </div>
    @include('blocks.breadcrumbs')
</header>
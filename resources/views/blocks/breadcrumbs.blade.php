@php
    $segments = Request::segments();
    $isHomePage = empty($segments);
    $breadcrumbs = [];
    $url = url('/');
    foreach ($segments as $segment) {
        $url .= '/' . $segment;
        $breadcrumbs[] = [
            'url' => $url,
            'label' => ucfirst(str_replace('-', ' ', $segment)),
        ];
    }
@endphp

@if (!$isHomePage)
    <nav class="w-full my-4" aria-label="Breadcrumb">
        <ol class="flex flex-wrap items-center space-x-1 text-sm text-gray-500">
            <li>
                <a href="{{ url('/') }}" class="text-blue-600 hover:underline flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5 0a2 2 0 002-2V7a2 2 0 00-.586-1.414l-7-7a2 2 0 00-2.828 0l-7 7A2 2 0 003 7v11a2 2 0 002 2h3"/></svg>
                    Home
                </a>
            </li>
            @foreach($breadcrumbs as $index => $breadcrumb)
                <li class="flex items-center">
                    <svg class="w-3 h-3 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M7.05 4.05a1 1 0 011.414 0l5.5 5.5a1 1 0 010 1.414l-5.5 5.5a1 1 0 01-1.414-1.414L12.086 10 7.05 5.964a1 1 0 010-1.414z"/></svg>
                    @if($index + 1 < count($breadcrumbs))
                        <a href="{{ $breadcrumb['url'] }}" class="text-blue-600 hover:underline">{{ $breadcrumb['label'] }}</a>
                    @else
                        <span class="text-gray-700 font-semibold" aria-current="page">{{ $breadcrumb['label'] }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif
@php
    $segments = Request::segments();
    $isHomePage = empty($segments);
@endphp

@if (!$isHomePage)
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>

            @php
                $url = url('/');
            @endphp

            @foreach($segments as $index => $segment)
                @php
                    $url .= '/' . $segment;
                    $displaySegment = ucfirst(str_replace('-', ' ', $segment));
                @endphp

                @if($index + 1 < count($segments))
                    <li class="breadcrumb-item">
                        <a href="{{ $url }}">{{ $displaySegment }}</a>
                    </li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $displaySegment }}
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
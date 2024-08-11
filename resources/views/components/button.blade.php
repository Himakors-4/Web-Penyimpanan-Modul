@props([
    'type' => 'button',  // For button element
    'variant' => 'primary',
    'text' => '',
    'href' => null,      // For link element
    'class' => ''        // Additional classes
])

@if ($href)
    <a href="{{ $href }}" class="btn btn-{{ $variant }} {{ $class }}">
        {{ $text }}
    </a>
@else
    <button type="{{ $type }}" class="btn btn-{{ $variant }} {{ $class }}">
        {{ $text }}
    </button>
@endif
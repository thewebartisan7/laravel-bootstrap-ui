@props([
    'name',
    'prefix' => 'bi bi-',
    'path' => 'static/icons/bootstrap',
    'width' => 16,
    'height' => 16,
    'mode' => 'sprite',
])

{{-- Four different mode @see https://icons.getbootstrap.com/#usage --}}

{{-- Font require to include CSS inside 'static/icons/bootstrap/bootstrap-icons.css' --}}
@if($mode === 'font')
    <i class="{{ $prefix.$name }}" role="img" aria-label="{{ $name }}"></i>
@elseif($mode === 'embedded')
{{-- Embedded require to add SVG inside 'resources/views/partials/bootstrap-svg.blade.php' --}}
    <svg {{ $attributes->class(['bi']) }} width="{{ $width }}" height="{{ $height }}" role="img" aria-label="{{ $name }}:"><use xlink:href="#{{ $name }}"/></svg>
@elseif($mode === 'external')
    <img {{ $attributes->merge(['src' => asset(ltrim($path, '/')."/$src") ]) }} width="{{ $width }}" height="{{ $height }}" role="img">
@else
    <svg {{ $attributes->class(['bi']) }} width="{{ $width }}" height="{{ $height }}" fill="currentColor">
        <use xlink:href="{{ asset(ltrim($path, '/').'/bootstrap-icons.svg') }}#{{ $name }}"/>
    </svg>
@endif

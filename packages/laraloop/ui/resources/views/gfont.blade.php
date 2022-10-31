@props([
    'font'
])

@if(!empty($font))
    @php
        $font = is_array($font) ? $font : explode(',', $font);
        $font = array_map('trim', $font);
        $font = implode('&family=', $font);
    @endphp

    @if(!empty($font))
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family={{ $font }}&display=swap" rel="stylesheet">
    @endif
@endif

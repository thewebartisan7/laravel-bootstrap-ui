@props([
    'path' => asset('assets/favicons'),
    'color' => '7952b3'
])

@php
    $path = rtrim($path, '/');
@endphp

<link rel="apple-touch-icon" href="{{ "$path/apple-touch-icon.png" }}" sizes="180x180">
<link rel="icon" href="{{ "$path/favicon-32x32.png" }}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ "$path/favicon-16x16.png" }}" sizes="16x16" type="image/png">
<link rel="manifest" href="{{ "$path/manifest.json" }}">
<link rel="mask-icon" href="{{ "$path/safari-pinned-tab.svg" }}" color="#{{ $color }}">
<link rel="icon" href="{{ "$path/favicon.ico" }}">
<meta name="theme-color" content="#{{ $color }}">

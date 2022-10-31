@props([
    'title',
    'description',
    'type' => 'website',
    'card' => 'summary_large_image',
    'image',
    'url' => $url ?? url()->current()
])
<meta name="twitter:card" content="{{ $card }}" />
<meta property="og:type" content="{{ $type }}">
<meta property="og:title" content="{{ $title }}" />
@if (!empty($description))
    <meta name="description" content="{{ $description }}">
    <meta property="og:description" content="{{ $description }}">
@endif
@if (!empty($image))
    <meta property="og:image" content="{{ $image }}" />
@endif
<meta property="og:url" content="{{ $url }}" />
<meta property="og:locale" content="{{ app()->getLocale() }}" />

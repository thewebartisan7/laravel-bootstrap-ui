@props([
    'header' => null,
    'body',
    'footer',
    'icon' => null,
    'title' => null,
    'subtitle' => null
])

<div {{ $attributes->class(['toast']) }} role="alert" aria-live="assertive" aria-atomic="true">
    @if($header || $title)
        <x-toast.header>{{ $header ?? null }}</x-toast.header>
    @endif

    {{ $slot }}

    @isset($body)
        <x-toast.body>{{ $body }}</x-toast.body>
    @endisset
</div>

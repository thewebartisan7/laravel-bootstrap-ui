@props([
    'header',
    'body',
    'footer',
])

<div {{ $attributes->class(['modal-content']) }}>
    @isset($header)
        <x-modal.header>{{ $header }}</x-modal.header>
    @endisset

    {{ $slot }}

    @isset($body)
        <x-modal.body>{{ $body }}</x-modal.body>
    @endisset

    @isset($footer)
        <x-modal.footer>{{ $footer }}</x-modal.footer>
    @endisset
</div>

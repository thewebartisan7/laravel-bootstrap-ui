@props([
    'id',
    'placement' => '',
    'start' => true,
    'end' => false,
    'top' => false,
    'bottom' => false,
    'scroll' => false,
    'backdrop' => false,
    'header',
    'body',
])

<div {{ $attributes->class([
    'offcanvas',
    "offcanvas-$placement" => !empty($placement),
    'offcanvas-start' => ($start && empty($placement)),
    'offcanvas-end' => ($end && empty($placement)),
    'offcanvas-top' => ($top && empty($placement)),
    'offcanvas-bottom' => ($bottom && empty($placement)),
])->merge([
    'data-bs-scroll' => $scroll,
    'data-bs-backdrop' => $backdrop
]) }}
     tabindex="-1"
     id="offcanvas{{ ucfirst($id) }}"
     aria-labelledby="offcanvas{{ ucfirst($id) }}Label"
>
    @isset($header)
        <x-offcanvas.header>{{ $header }}</x-offcanvas.header>
    @endisset

    {{ $slot }}

    @isset($body)
        <x-offcanvas.body>{{ $body }}</x-offcanvas.body>
    @endisset
</div>

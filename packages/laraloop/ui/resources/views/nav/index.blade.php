@props([
    'centered' => false,
    'end' => false,
    'vertical' => false,
    'justified' => false,
    'tabs' => false,
    'pills' => false,
    'fill' => false
])

<nav {{ $attributes->class([
    'nav',
    'nav-tabs' => $tabs,
    'nav-pills' => $pills,
    'nav-fill' => $fill,
    'nav-justified' => $justified,
    'justify-content-center' => $centered,
    'justify-content-end' => $end,
    'flex-column' => ($vertical === true),
    "flex-$vertical-column" => is_string($vertical),
    ]) }}>{{ $slot }}</nav>

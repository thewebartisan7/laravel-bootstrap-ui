@props([
    'title',
    'content',
    'tag' => 'a',
    'html' => 'false',
    'placement' => 'top',
    'trigger' => 'hover focus'
])

<{{ $tag }} {{ $attributes->merge([
    'href' => $tag === 'a' ? '#' : false,
    'data-controller' => 'tooltip',
    'data-bs-placement' => $placement,
    'data-bs-html' => $html,
    'data-bs-trigger' => $trigger,
    'title' => $title
]) }}>
    {{ $slot }}
</{{ $tag }}>

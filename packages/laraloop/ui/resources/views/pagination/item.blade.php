@props([
    'to' => null,
    'href' => null,
    'params' => [],
    'active' => false,
    'disabled' => false,
    'label',
])

<li {{ $attributes->class(['page-item', 'active' => $active, 'disabled' => $disabled])
    ->merge(['aria-current' => $active ? 'page' : null]) }}>
    @empty($to)
        @empty($href)
            <a class="page-link">{{ $label ?? $slot }}</a>
        @else
            <a class="page-link{{ ($active ? ' active' : '') . ($disabled ? ' disabled' : '') }}" href="{{ $href }}">{{ $label ?? $slot }}</a>
        @endempty
    @else
        <x-link class="page-link" :to="$to" :params="$params" :disabled="$disabled" exact>{{ $label ?? $slot }}</x-link>
    @endempty
</li>

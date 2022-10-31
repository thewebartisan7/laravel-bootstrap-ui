@aware([
    'active' => false,
    'disabled' => false,
    'to' => null,
    'params' => []
])

@empty($to)
    <a {{ $attributes->class(['dropdown-item', 'active' => $active, 'disabled' => $disabled]) }}>{{ $slot }}</a>
@else
    <x-link :to="$to" :params="$params" :disabled="$disabled">{{ $slot }}</x-link>
@endif

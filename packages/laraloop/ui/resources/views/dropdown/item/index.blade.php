@aware([
    'list' => false,
    'active' => false,
    'disabled' => false,
])

@if($list)
    <x-dropdown.item.li {{ $attributes->class(['dropdown-item', 'active' => $active, 'disabled' => $disabled]) }}>{{ $slot }}</x-dropdown.item.li>
@else
    <x-dropdown.item.a {{ $attributes->class(['dropdown-item', 'active' => $active, 'disabled' => $disabled]) }}>{{ $slot }}</x-dropdown.item.a>
@endif

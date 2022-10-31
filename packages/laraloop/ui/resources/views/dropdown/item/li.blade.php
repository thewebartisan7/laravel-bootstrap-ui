@aware([
    'active' => false,
    'disabled' => false,
])

<li>
    <x-dropdown.item.a {{ $attributes->class(['dropdown-item', 'active' => $active, 'disabled' => $disabled]) }}>{{ $slot }}</x-dropdown.item.a>
</li>

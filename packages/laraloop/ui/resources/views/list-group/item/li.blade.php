@aware([
    'active' => false,
    'disabled' => false,
    'color' => false,
    'label' => '',
])

<li {{ $attributes->class([
    'list-group-item',
    "list-group-item-$color" => in_array($color, ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']),
    'active' => $active,
    'disabled' => $disabled
])->merge([
    'aria-current' => $active ? 'true' : null,
    'aria-disabled' => $disabled ? 'true' : null
])->whereDoesntStartWith('label') }}>{{ $slot->isEmpty() ? $label : $slot }}</li>

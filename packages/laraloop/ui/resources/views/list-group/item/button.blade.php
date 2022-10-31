@aware([
    'active' => false,
    'disabled' => false,
    'color' => false,
    'toggle' => false,
    'label' => ''
])

<button {{ $attributes->class([
    'list-group-item',
    "list-group-item-$color" => in_array($color, ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']),
    'list-group-item-action',
    'active' => $active,
    'disabled' => $disabled,
])->merge([
    'aria-current' => $active ? 'true' : null,
    'aria-disabled' => $disabled ? 'true' : null,
    'data-bs-toggle' => $toggle ? 'list' : null,
    'role' => $toggle ? 'tab' : null,
])->whereDoesntStartWith('label') }}>{{ $slot->isEmpty() ? $label : $slot }}</button>

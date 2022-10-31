<button {{ $attributes->class([
    'btn' => !empty($color),
    "btn-$color" => !$outline,
    "btn-outline-$color" => $outline,
    'btn-sm' => $small,
    'btn-lg' => $large,
    'active' => $active
])->merge([
    'type' => $type,
    'data-bs-toggle' => $toggle,
    'data-bs-target' => $target ? "#$target" : false,
    'aria-pressed' => $isPressed(),
    'aria-expanded' => $isExpanded(),
    'aria-controls' => $target
]) }}>{{ $slot }}</button>

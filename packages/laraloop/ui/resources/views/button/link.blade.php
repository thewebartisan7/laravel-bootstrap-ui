<a {{ $attributes->class([
    'btn',
    "btn-$color" => ! $outline,
    "btn-outline-$color" => $outline,
    'active' => $active,
    "disabled" => $disabled
    ])->merge([
        'href' => ! $attributes->has('href') ? '#' : false,
        'role' => ! $attributes->has('href') ? 'button' : false,
        'tabindex' => $disabled ? '-1' : false,
        'aria-disabled' => $disabled ? 'true' : false,
        'data-bs-toggle' => $toggle,
        'data-bs-target' => $target ? "#$target" : false,
        'aria-expanded' => $isExpanded(),
        'aria-controls' => $target,
        'aria-pressed' => $isPressed(),
        'aria-current' => $active ? $current : false,
]) }}>{{ $slot }}</a>

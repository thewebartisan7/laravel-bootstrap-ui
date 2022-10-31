<input {{ $attributes->class([
    'btn',
    "btn-$color" => ! $outline,
    "btn-outline-$color" => $outline,
    'btn-sm' => $small,
    'btn-lg' => $large,
    'active' => $active
])->merge([
    'type' => $type,
    'data-bs-toggle' => $toggle,
    'aria-pressed' => $isPressed()
]) }} value="{{ $slot }}">


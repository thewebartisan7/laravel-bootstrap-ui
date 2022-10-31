@aware([
    'id',
    'color' => 'primary',
    'outline' => false,
    'size' => false,
    'reference' => 'toggle',
    'offset',
    'close' => false,
    'expanded' => false
])

<button {{ $attributes->class([
    'dropdown-toggle',
    'btn',
    "btn-$color" => !$outline,
    "btn-outline-$color" => $outline,
    "btn-$size" => $size,
    'show' => $expanded
])->merge([
    'id' => "dropdownMenu$id",
    'data-bs-toggle' => 'dropdown',
    'aria-expanded' => $expanded ? 'true' : 'false',
    'data-bs-offset' => $offset ?? null,
    'data-bs-auto-close' => $close ? (is_string($close) ? $close : ($close === true ? 'true' : 'false')) : null,
    'data-bs-reference' => $reference
]) }}>{{ $slot }}</button>

@aware([
    'id',
    'color' => 'primary',
    'outline' => false,
    'size' => false,
    'reference' => 'toggle',
    'offset',
    'close' => false,
    'expanded' => false,
    'position' => 'down',
])

<x-button :color="$color" :outline="$outline" :size="$size">{{ $slot }}</x-button>
<button {{ $attributes->class([
    'dropdown-toggle dropdown-toggle-split',
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
]) }}><span class="visually-hidden">Toggle Dropdown</span></button>

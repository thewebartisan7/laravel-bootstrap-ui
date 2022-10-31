@aware([
    'id',
    'offset' => false,
    'close' => false,
    'expanded' => false
])

<a href="#" {{ $attributes->class('dropdown-toggle')->merge([
    'id' => "dropdownMenu$id",
    'data-bs-toggle' => 'dropdown',
    'role' => 'button',
    'aria-expanded' => $expanded ? 'true' : 'false',
    'data-bs-offset' => $offset ?? null,
    'data-bs-auto-close' => $close ? (is_string($close) ? $close : ($close === true ? 'true' : 'false')) : null,
]) }}>{{ $slot }}</a>

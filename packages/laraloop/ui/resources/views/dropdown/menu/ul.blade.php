@aware([
    'id',
    'dark' => false,
    'end' => false,
    'start' => false,
])

<ul {{ $attributes->class([
        'dropdown-menu',
        'dropdown-menu-dark' => $dark,
        'dropdown-menu-end' => ($end === true),
        "dropdown-menu-$end-end" => is_string($end),
        'dropdown-menu-start' => ($start === true),
        "dropdown-menu-$start-start" => is_string($start)
    ]) }} aria-labelledby="dropdownMenu{{ $id }}" @if($start || $end) data-bs-display="static" @endif>
    {{ $slot }}
</ul>

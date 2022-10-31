
<a {{ $attributes->class([
        $active => $isActive,
        'disabled' => $disabled
    ])->merge([
        'href' => $url(),
        'aria-current' => $current
   ]) }}>{{ $slot }}</a>

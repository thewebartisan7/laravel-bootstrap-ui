@props([
    'size' => false,
    'small' => false,
    'large' => false,
    'centered' => false,
    'end' => false,
])

<nav aria-label="Breadcrumb navigation">
    <ul {{ $attributes->class([
        'pagination',
        'justify-content-center' => $centered,
        'justify-content-end' => $end,
        "pagination-lg" => $large,
        "pagination-sm" => $small,
        "pagination-$size" => !! $size
     ]) }}>
        {{ $slot }}
    </ul>
</nav>

@props([
    'type' => 'border',
    'color' => false,
    'small' => false
])
<span {{ $attributes->class([
        "spinner-$type",
        "spinner-$type-sm" => $small,
        "text-$color" => !!$color
    ]) }} role="status" aria-hidden="true">
    <span class="visually-hidden">Loading...</span>
</span>

@props([
    'id',
    'active' => false
])

<div {{ $attributes->class([
    'tab-pane fade',
    'show active' => $active
])->merge([
    'id' => $id,
    'role' => 'tabpanel',
    'aria-labelledby' => "$id-tab"
]) }}>{{ $slot }}</div>

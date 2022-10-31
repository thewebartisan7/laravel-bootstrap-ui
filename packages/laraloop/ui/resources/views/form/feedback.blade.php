@props([
    'name',
    'valid' => false,
    'invalid' => false
])

<div {{ $attributes->class([
    'valid-feedback' => $valid,
    'invalid-feedback' => $invalid,
])->merge(['id' => $invalid && isset($name) ? "{$name}Feedback" : false]) }} role="alert">{{ $slot }}</div>

@aware([
    'color' => 'primary',
    'striped' => false,
    'animated' => false,
    'value' => 0,
    'min' => 0,
    'max' => 100
])
{{-- test if passing style attribute will be merged ?? --}}

<div {{ $attributes->class([
    'progress-bar',
    'progress-bar-striped' => $striped || $animated,
    'progress-bar-animated' => $animated,
    "bg-$color" => !! $color
])->merge(['style' => $value ? "width: $value%" : null]) }}
     role="progressbar"
     aria-valuenow="{{ $value }}"
     aria-valuemin="{{ $min }}"
     aria-valuemax="{{ $max }}">{{ $slot }}</div>

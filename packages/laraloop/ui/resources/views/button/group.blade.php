@props([
    'size' => false,
    'small' => false,
    'large' => false,
    'label' => 'Button group',
    'vertical' => false,
])

<div {{ $attributes->class([
      'btn-group',
      "btn-group-$size" => $size,
      'btn-group-sm' => $small,
      'btn-group-lg' => $large,
      'btn-group-vertical' => $vertical
    ])->merge([
      'role' => 'group',
      'aria-label' => $label
]) }}>{{ $slot }}</div>

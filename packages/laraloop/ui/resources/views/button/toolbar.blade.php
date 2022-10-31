@props([
    'label' => 'Button toolbar',
])

<div {{ $attributes->class('btn-toolbar')->merge([
  'role' => 'toolbar',
  'aria-label' => $label
]) }}>{{ $slot }}</div>

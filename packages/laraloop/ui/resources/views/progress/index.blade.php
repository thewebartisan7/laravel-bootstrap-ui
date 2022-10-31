@props([
    'color' => false,
    'value' => 0,
    'min' => 0,
    'max' => 100,
])

<div {{ $attributes->class('progress') }}>
    @if($slot->isEmpty())
        <x-progress.bar />
    @else
        {{ $slot }}
    @endif
</div>

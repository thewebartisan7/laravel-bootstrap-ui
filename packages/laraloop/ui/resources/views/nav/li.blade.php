@props([
    'to',
    'params' => [],
    'disabled' => false,
])
{{-- rename to item.blade.php --}}
<li {{ $attributes->class('nav-item') }}>
    <x-nav.link>{{ $slot }}</x-nav.link>
</li>

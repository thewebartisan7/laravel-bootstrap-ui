@props([
    'id',
    'flush' => false,
    'numbered' => false,
    'flush' => false,
    'horizontal' => false,
    'horizontal' => false,
    'toggle' => false,
    'list' => true,
])

@if($list)
    <x-list-group.ul {{ $attributes }}>{{ $slot }}</x-list-group.ul>
@else
    <x-list-group.div {{ $attributes }}>{{ $slot }}</x-list-group.div>
@endif


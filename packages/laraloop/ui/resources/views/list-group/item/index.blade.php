@aware([
    'list' => true
])

@if($list)
    <x-list-group.item.li {{ $attributes }}>{{ $slot }}</x-list-group.item.li>
@else
    <x-list-group.item.a {{ $attributes }}>{{ $slot }}</x-list-group.item.a>
@endif


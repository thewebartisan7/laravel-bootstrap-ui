@aware([
    'list' => false
])

@if($list)
    <li {{ $attributes->class('dropdown-item-text')->whereDoesntStartWith('list') }}>{{ $slot }}</li>
@else
    <span {{ $attributes->class('dropdown-item-text') }}>{{ $slot }}</span>
@endif

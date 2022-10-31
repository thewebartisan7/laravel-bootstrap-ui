@aware([
    'list' => false
])
@if($list)
    <li>
        <h6 {{ $attributes->class('dropdown-header') }}>{{ $slot }}</h6>
    </li>
@else
    <h6 {{ $attributes->class('dropdown-header') }}>{{ $slot }}</h6>
@endif

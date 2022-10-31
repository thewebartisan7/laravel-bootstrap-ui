@aware([
    'id',
    'color' => 'primary',
    'outline' => false,
    'size' => false,
    'reference' => 'toggle',
    'offset',
    'close' => false,
    'expanded' => false,
    'split' => false,
    'type' => 'button'
])

@if($split)
    <x-dropdown.toggle.split {{ $attributes }}>{{ $slot }}</x-dropdown.toggle.split>
@elseif($type === 'link')
    <x-dropdown.toggle.a {{ $attributes }}>{{ $slot }}</x-dropdown.toggle.a>
@else
    <x-dropdown.toggle.button {{ $attributes }}>{{ $slot }}</x-dropdown.toggle.button>
@endif

{{-- NOTE: props are passed down to other components via @aware like ID and EXPANDED --}}
@props([
    'id',
    'position' => 'down',
    'up' => false,
    'start' => false,
    'end' => false,
    'color' => null,
    'split' => false,
    'group' => false,
    'list' => false,
    'size' => false,
    'dark' => false,
    'toggle',
    'menu'
])

<div {{ $attributes->class([
    'dropdown' => ($position === 'down'),
    'dropup' => ($up || $position === 'up'),
    'dropend' => ($end || $position === 'end'),
    'dropstart' => ($start || $position === 'start'),
    'btn-group' => $split || $group
    ])->merge([
      'role' => $group ? 'group' : null
]) }}>
    @isset($toggle)
        @if($split)
            <x-dropdown.toggle.split>{{ $toggle }}</x-dropdown.toggle.split>
        @else
            <x-dropdown.toggle>{{ $toggle }}</x-dropdown.toggle>
        @endif
    @endisset

    {{ $slot }}

    @isset($menu)
        {{-- NOTE: add property "list" when using slot, so that correct menu will be loaded (as UL) --}}
        @if($list)
            <x-dropdown.menu.ul>{{ $menu }}</x-dropdown.menu.ul>
        @else
            <x-dropdown.menu>{{ $menu }}</x-dropdown.menu>
        @endif
    @endisset
</div>

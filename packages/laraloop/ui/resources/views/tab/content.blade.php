@aware([
    'id'
])

<div {{ $attributes->class(['tab-content']) }} id="{{ $id }}TabContent">
    {{ $slot }}
</div>

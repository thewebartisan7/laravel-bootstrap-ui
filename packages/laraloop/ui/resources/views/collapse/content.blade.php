@aware([
    'id',
    'expanded' => false,
])

<div id="{{ $id }}" {{ $attributes->class(['collapse', 'show' => $expanded]) }}>
    {{ $slot }}
</div>

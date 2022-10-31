@aware([
    'color',
    'size'
])

<h1>Child</h1>

<div {{ $attributes }}>
    {{ $color }}
    {{ $size }}
    {{ $slot }}
</div>

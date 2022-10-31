@aware([
    'id'
])

<div {{ $attributes->class(['navbar-collapse', 'collapse']) }} id="navbar{{ ucfirst($id) }}">
    {{ $slot }}
</div>

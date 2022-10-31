@aware([
    'name',
    'help',
])

<div {{ $attributes->class('form-text')->merge(['id' => isset($name) ? "{$name}-help" : false]) }}>
    {!! $slot ?? $help !!}
</div>

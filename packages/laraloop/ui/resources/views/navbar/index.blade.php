@props([
    'id',
    'dark' => false,
    'expand' => true,
    'sticky' => false,
    'color' => 'light',
    'size' => null,
])

<header {{ $attributes->class([
    'navbar',
    'navbar-expand' => ($expand === true),
    "navbar-expand-$expand" => (is_string($expand) && in_array($expand, ['sm', 'md', 'lg', 'xl', 'xxl'])),
    'sticky-top' => ($sticky === true),
    "sticky-$sticky-top" => (is_string($sticky) && in_array($sticky, ['sm', 'md', 'lg', 'xl', 'xxl'])),
    'navbar-dark' => $dark,
    'navbar-light' => ! $dark,
    "bg-$color" => !! $color,
]) }} role="navigation">
    <div @class(['container' => empty($size), "container-$size" => !empty($size)])>
        {{ $slot }}
    </div>
</header>

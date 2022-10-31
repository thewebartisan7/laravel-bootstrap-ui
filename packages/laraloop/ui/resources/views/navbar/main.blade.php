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
]) }}>
    <div class="container-xxl px-3 px-lg-4 px-xl-5">
        <div class="d-block d-lg-flex justify-content-between align-items-center w-100">
            {{ $brand }}

            {{ $slot }}
        </div>
    </div>
</header>

@props([
    'flush' => false,
    'numbered' => false,
    'flush' => false,
    'horizontal' => false,
])

<ul {{ $attributes->class([
    'list-group',
    'list-group-flush' => $flush,
    'list-group-numbered' => $numbered,
    'list-group-horizontal' => ($horizontal === true),
    "list-group-$horizontal" => in_array($horizontal, ['sm', 'md', 'lg', 'xl', 'xxl']),
]) }}>{{ $slot }}</ul>

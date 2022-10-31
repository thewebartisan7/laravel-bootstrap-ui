@aware([
    'id',
    'flush' => false,
    'numbered' => false,
    'flush' => false,
    'horizontal' => false,
    'horizontal' => false,
    'toggle' => false,
    'list' => true,
])

<div {{ $attributes->class([
        'list-group',
        'list-group-flush' => $flush,
        'list-group-numbered' => $numbered,
        'list-group-horizontal' => ($horizontal === true),
        "list-group-$horizontal" => in_array($horizontal, ['sm', 'md', 'lg', 'xl', 'xxl']),
    ])->merge([
        'id' => !empty($id) ? 'list'.ucfirst($id) : null,
        'role' => $toggle ? 'tablist' : null
    ]) }}>{{ $slot }}</div>

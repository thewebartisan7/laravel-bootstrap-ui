@aware([
    'scrollable' => false,
    'centered' => false,
    'size' => false,
    'fullscreen' => false
])

<div {{ $attributes->class([
    'modal-dialog',
    'modal-dialog-scrollable' => $scrollable,
    'modal-dialog-centered' => $centered,
    "modal-$size" => !!$size,
    'modal-fullscreen'.($fullscreen === true ? '' : "-$fullscreen-down") => $fullscreen
    ]) }}>{{ $slot }}</div>

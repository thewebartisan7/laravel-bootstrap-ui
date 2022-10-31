<span {{ $attributes->class([
    'badge',
    "bg-$color",
    'position-absolute translate-middle' => $hasPosition(),
    "top-$top" => ($top !== false),
    "end-$end" => ($end !== false),
    "bottom-$bottom" => ($bottom !== false),
    "start-$start" => ($start !== false),
    'rounded-pill' => $pill,
    "rounded-circle" => $circle
]) }}>{!! $slot->isEmpty() ? ($title ?? '&nbsp;') : $slot !!}</span>

@aware([
    'id',
    'alwaysOpen' => false,
])

<div class="accordion-item">
    <h2 class="accordion-header" id="{{ $heading }}">
        <button type="button" @class(['accordion-button', 'collapsed' => ! $show])
                data-bs-toggle="collapse"
                data-bs-target="#{{ $collapse }}"
                aria-expanded="{{ $show ? 'true' : 'false' }}"
                aria-controls="{{ $collapse }}">{{ $title }}</button>
    </h2>

    <div {{ $attributes->class([
        'accordion-collapse collapse',
        'show' => $show
    ])->merge([
        'data-bs-parent' => $alwaysOpen ? false : "#$id",
        'id' => $collapse,
        'aria-labelledby' => $heading
    ]) }}>
        <div class="accordion-body">{{ $slot }}</div>
    </div>
</div>

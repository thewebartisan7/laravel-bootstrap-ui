<div {{ $attributes->class([
    'carousel-item',
    'active' => $active
])->merge([
    'data-bs-interval' => $interval ?? null
]) }}>
    @if($slot->isEmpty())
        @isset($src)
            <img src="{{ $src }}" class="d-block w-100" alt="{{ $alt ?? '' }}">
        @endif

        @isset($caption)
            @if(is_string($caption))
                <div class="carousel-caption d-none d-md-block">
                    <h4>{{ $caption }}</h4>
                </div>
            @else
                <div {{ $caption->attributes->class(['carousel-caption']) }}>
                    {{ $caption }}
                </div>
            @endif
        @endif
    @else
        {{ $slot }}
    @endif
</div>

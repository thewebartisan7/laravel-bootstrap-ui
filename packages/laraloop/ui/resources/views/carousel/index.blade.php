<div {{ $attributes->class([
    'carousel',
    'slide',
    'carousel-fade' => $crossfade,
    'carousel-dark' => $dark
])->merge([
    'id' => $id,
    'data-bs-ride' => $ride(),
    'data-bs-touch' => $touch(),
    'data-bs-interval' => $interval(),
]) }}>
  @if($indicators)
    <div class="carousel-indicators">
      @for($i = 0; $i < $indicators; $i++)
        <button type="button"
                data-bs-target="#{{ $id }}"
                data-bs-slide-to="{{ $i }}"
                @if($i === 0) class="active" aria-current="true" @endif
                aria-label="Slide {{ $i }}"></button>
      @endfor
    </div>
  @endif

  <div class="carousel-inner">{{ $slot }}</div>

  @if($controls)
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">{{ __('Previous') }}</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">{{ __('Next') }}</span>
    </button>
  @endif
</div>

@props([
  'url' => '/',
  'src' => null,
  'width' => 120,
  'height' => 'auto',
  'alt',
  'appName' => config('app.name')
])

<a {{ $attributes->class('navbar-brand') }} href="{{ $url }}">
  @if($slot->isEmpty() && isset($src))
    <img src="{{ asset($src) }}" alt="{{ $alt ?? $appName }}" width="{{ $width }}" height="{{ $height }}">
  @elseif($slot->isNotEmpty())
    {{ $slot }}
  @else
      {{ $appName }}
  @endif
</a>

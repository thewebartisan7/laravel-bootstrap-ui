@props([
  'header',
  'body',
  'footer'
])

<div {{ $attributes->class(['card']) }}>
  @isset($header)
    <div {{ $header->attributes->class('card-header') }}>{{ $header }}</div>
  @endisset

  {{ $slot }}

  @isset($body)
    <div {{ $body->attributes->class('card-body') }}>{{ $body }}</div>
  @endisset

  @isset($footer)
      <div {{ $footer->attributes->class('card-footer') }}>{{ $footer }}</div>
  @endisset
</div>

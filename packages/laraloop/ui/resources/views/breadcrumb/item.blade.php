<li {{ $attributes->class([
      'breadcrumb-item',
      'active' => $isActiveWithoutLink()
    ])
    ->merge([
      'aria-current' => $isActiveWithoutLink() ? 'page' : null]
      ) }}>
  @isset($to)
    <x-link :to="$to" :params="$params" exact>{{ $label ?? $slot }}</x-link>
  @elseif(!empty($href))
    <a href="{{ $href }}" @class(['active' => $active])>{{ $label ?? $slot }}</a>
  @else
    {{ $label ?? $slot }}
  @endif
</li>

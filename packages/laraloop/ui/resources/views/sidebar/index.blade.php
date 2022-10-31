@props([
  'id' => 'sidebar',
  'sticky' => false,
  'fixed' => true,
  'white' => false,
  'light' => false,
  'dark' => false,
])

<aside id="{{ $id }}" {{ $attributes->class([
  'sidebar',
  'sidebar--sticky' => $sticky,
  'sidebar--fixed' => $fixed,
  'col-md-3',
  'col-lg-2',
  'd-md-block',
  'collapse',
  'bg-white' => $white,
  'bg-light' => $light,
  'bg-dark' => $dark
]) }}>
  <div class="sidebar__content pt-3">{{ $slot }}</div>
</aside>

@props([
    'id'
])

<a {{ $attributes }}
   data-bs-toggle="offcanvas"
   href="#offcanvas{{ ucfirst($id) }}"
   role="button"
   aria-controls="offcanvas{{ ucfirst($id) }}">{{ $slot }}</a>

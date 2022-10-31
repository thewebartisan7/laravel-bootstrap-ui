@props([
    'id'
])

<button {{ $attributes }}
   data-bs-toggle="offcanvas"
   href="#offcanvas{{ ucfirst($id) }}"
   aria-controls="offcanvas{{ ucfirst($id) }}">{{ $slot }}</button>

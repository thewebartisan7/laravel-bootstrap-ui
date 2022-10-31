@props([
    'id'
])

<a href="#{{ $id }}Modal" {{ $attributes }} data-bs-toggle="modal" role="button">{{ $slot }}</a>

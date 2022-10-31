@props([
    'id'
])

<button type="button" {{ $attributes }} data-bs-toggle="modal" data-bs-target="#{{ $id }}Modal">{{ $slot }}</button>

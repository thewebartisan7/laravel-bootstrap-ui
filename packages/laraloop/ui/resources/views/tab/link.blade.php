@props([
    'id',
    'active' => false
])

<button type="button" {{ $attributes->class(['nav-link', 'active' => $active]) }}
        id="{{ $id }}-tab"
        data-bs-toggle="tab"
        data-bs-target="#{{ $id }}"
        aria-controls="{{ $id }}-tab"
        aria-selected="{{ $active ? 'true' : 'false' }}"
        role="tab">{{ $slot }}</button>

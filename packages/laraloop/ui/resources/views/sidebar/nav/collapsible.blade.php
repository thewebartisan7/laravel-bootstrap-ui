@props([
    'title',
    'id',
    'collapsed' => false
])

<li class="mb-1">
    <button class="btn btn-toggle align-items-center rounded {{ $collapsed ? 'collapsed' : '' }}"
            data-bs-toggle="collapse"
            data-bs-target="#{{ $id }}-collapse"
            aria-expanded="{{ $collapsed ? 'true' : 'false' }}">{{ $title }}</button>

    <div class="collapse {{ $collapsed ? 'show' : '' }}" id="{{ $id }}-collapse">
        <ul class="sidebar__nav btn-toggle-nav list-unstyled fw-normal pb-1 small">
            {{ $slot }}
        </ul>
    </div>
</li>

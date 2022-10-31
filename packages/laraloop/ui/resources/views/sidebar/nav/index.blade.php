@props([
    'title',
])
<div class="sidebar__nav">
    @isset($title)
        <h6 class="sidebar__heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>{{ $title }}</span>
        </h6>
    @endif
    <ul class="nav flex-column mb-2">
        {{ $slot }}
    </ul>
</div>

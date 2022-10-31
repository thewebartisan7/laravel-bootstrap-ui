@props([
    'to',
    'params' => [],
    'icon' => false,
])

<li class="nav-item">
    <x-link :to="$to" :params="$params" class="nav-link">
        @if($icon)
            <x-icon :name="$icon" />
        @endif
        <span>{{ $slot }}</span>
    </x-link>
</li>

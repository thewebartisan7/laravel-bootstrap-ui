@aware([
    'icon' => 'info-circle-fill',
    'title' => null,
    'subtitle' => null,
])

<div {{ $attributes->class('toast-header') }}>
    @if($slot->isEmpty())
        @if($icon !== false) <x-icon :name="$icon" class="me-2" /> @endisset
        @isset($title) <strong class="me-auto">{{ $title }}</strong> @endisset
        @isset($subtitle) <small>{{ $subtitle }}</small> @endisset
    @else
        {{ $slot }}
    @endif

    <x-button.close data-bs-dismiss="toast" />
</div>

<div {{ $attributes->class([
    "alert alert-$type",
    'alert-dismissible fade show' => $dismissible,
    'd-flex align-items-center' => $icon
    ]) }} role="alert">

    @if($icon)
        <x-icon name="{{ $icon }}" class="flex-shrink-0 me-2" width="24" height="24" />
    @endif

    @if($slot->isEmpty())
        @if($icon) <div>{{ $message }}</div> @else {{ $message() }} @endif
    @else
        @if($icon) <div>{{ $slot }}</div> @else {{ $slot }} @endif
    @endif

    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>

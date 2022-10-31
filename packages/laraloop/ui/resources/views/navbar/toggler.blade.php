@aware([
    'id'
])

<button {{ $attributes->class(['navbar-toggler']) }}
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar{{ ucfirst($id) }}"
        aria-controls="navbar{{ ucfirst($id) }}"
        aria-expanded="false"
        aria-label="Toggle navigation">
    @if($slot->isEmpty())
        <span class="navbar-toggler-icon"></span>
    @else
        {{ $slot }}
    @endif
</button>

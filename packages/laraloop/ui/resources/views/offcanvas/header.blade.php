@aware([
    'id'
])

<div {{ $attributes->class('offcanvas-header') }}>
    <h5 class="offcanvas-title" id="offcanvas{{ ucfirst($id) }}Label">{{ $title }}</h5>

    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>

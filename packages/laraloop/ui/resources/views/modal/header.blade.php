@aware([
    'id'
])

<div {{ $attributes->class(['modal-header']) }}>
    <h5 class="modal-title" id="{{ $id }}ModalLabel">{{ $slot }}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Close') }}"></button>
</div>

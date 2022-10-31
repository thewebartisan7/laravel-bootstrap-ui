<div {{ $attributes->class(['modal-footer']) }}>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
    {{ $slot }}
</div>

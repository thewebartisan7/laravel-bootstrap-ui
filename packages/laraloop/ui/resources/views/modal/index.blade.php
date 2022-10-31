@props([
    'id',
    'static' => false
])

<div {{ $attributes->merge(['class' => 'modal fade']) }}
     id="{{ $id }}Modal"
     @if($static)data-bs-backdrop="static"@endif
     tabindex="-1"
     aria-labelledby="{{ $id }}ModalLabel"
     aria-hidden="true">
    {{ $slot }}
</div>

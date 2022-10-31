@props([
    'id',
    'title',
    'actions',
    'method' => 'POST',
    'centered' => false,
    'scrollable' => false,
    'fullscreen' => 'sm',
    'size' => 'lg'
])
<x-modal id="{{ $id }}" :fullscreen="$fullscreen" :size="$size" :centered="$centered" :scrollable="$scrollable" static>
    <x-modal.dialog>
        <x-form :method="$method" {{ $attributes->merge(['class' => 'modal-content']) }}>
            @isset($title)
                <x-modal.header>{{ $title }}</x-modal.header>
            @endisset

            <x-modal.body>{{ $slot }}</x-modal.body>

            <x-modal.footer class="bg-light border-top">
                @isset($actions)
                    {{ $actions }}
                @else
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                @endisset
            </x-modal.footer>
        </x-form>
    </x-modal.dialog>
</x-modal>

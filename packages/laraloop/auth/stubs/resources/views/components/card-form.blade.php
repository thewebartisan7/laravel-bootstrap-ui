@props([
    'method',
    'actions' => null,
    'cardClass' => 'card',
    'cardBodyClass' => 'card-body',
    'cardFooterClass' => 'card-footer text-right'
])

<div class="{{ $cardClass }}">
    <x-form :method="$method" {{ $attributes }}>

        <div class="{{ $cardBodyClass }}">
            {{ $slot }}
        </div>

        <div class="{{ $cardFooterClass }}">
            @if($actions)
                {{ $actions }}
            @else
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            @endif
        </div>
    </x-form>
</div>

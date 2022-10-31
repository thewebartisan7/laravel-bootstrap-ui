@props([
    'title',
    'content',
    'class' => 'btn btn-light',
    'placement' => 'right',
    'trigger' => 'click',
    'container' => 'body'
])

{{-- trigger="focus hover" works only with tag 'a' --}}
{{--<a href="#" --}}
{{--   class="{{ $class }}" --}}
{{--   data-controller="popover" --}}
{{--   data-action="click->popover#toggle"--}}
{{--   title="{{ $title }}"--}}
{{--   data-bs-toggle="popover"--}}
{{--   data-bs-content="{{ $content }}" --}}
{{--   data-bs-placement="{{ $placement }}"--}}
{{--   data-bs-trigger="{{ $trigger }}"--}}
{{--   data-bs-container="{{ $container }}"--}}
{{--   tabindex="0"--}}
{{--   role="button">{{ $slot }}</a>--}}

<button type="button"
        class="{{ $class }}"
        data-controller="popover"
        data-action="click->popover#toggle"
        title="{{ $title }}"
        data-bs-content="{{ $content }}"
        data-bs-placement="{{ $placement }}"
        data-bs-trigger="{{ $trigger }}"
        data-bs-container="{{ $container }}">{{ $slot }}</button>

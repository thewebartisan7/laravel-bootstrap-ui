@isset($button)
  <x-button {{ $attributes }}
            toggle="collapse"
            data-bs-target="#{{ $id }}"
            aria-expanded="{{ $expanded ? 'true' : 'false' }}"
            aria-controls="{{ $id }}">{{ $button }}</x-button>
@elseif(isset($link))
  <a {{ $attributes }}
     data-bs-toggle="collapse"
     href="#{{ $id }}"
     role="button"
     aria-expanded="{{ $expanded ? 'true' : 'false' }}"
     aria-controls="{{ $id }}">{{ $link }}</a>
@endisset

@if($slot->isEmpty())
  @isset($content)
    <x-collapse.content :attributes="$content->attributes">{{ $content }}</x-collapse.content>
  @endisset
@else
  {{ $slot }}
@endif

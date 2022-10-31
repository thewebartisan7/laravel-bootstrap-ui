@props([
  'name',
  'bag' => null,
  'label' => null,
  'check' => false,
  'small' => false,
  'large' => false,
  'prepend' => null,
  'append' => null,
  'help' => null
])

<div class="row mb-3">
  @if($label && !$check)
    <x-form.label class="col-lg-3 col-form-label text-lg-end" :col-small="$small" :col-large="$large">{{ $label }}</x-form.label>
  @endif

  <div {{ $attributes->class([
    'col-lg-9',
    'offset-lg-3' => $check
  ]) }}>

    @if($prepend || $append)
      <div @class(['input-group', "input-group-sm" => $small, "input-group-lg" => $large])>
        @if($prepend)<div class="input-group-text">{!! $prepend !!}</div>@endif
        {{ $slot }}
        @if($append)<div class="input-group-text">{!! $append !!}</div>@endif
      </div>
    @elseif($check)
      <div class="form-check">
        {{ $slot }}
        @if($label)<x-form.label>{{ $label }}</x-form.label>@endif
      </div>
    @else
      {{ $slot }}
    @endif

    @if($help)<x-form.text>{!! $help !!}</x-form.text>@endif
    @error($name, $bag)<x-form.feedback invalid>{{ $message }}</x-form.feedback>@enderror
  </div>
</div>

@props([
  'name',
  'id' => null,
  'bag' => null,
  'label' => null,
  'check' => false,
  'small' => false,
  'large' => false,
  'prepend' => null,
  'append' => null,
  'help' => null,
  'floating' => false,
  'inline' => false,
  'switch' => false
])

@if($label && !$check && ($prepend || $append))
  <x-form.label>{{ $label }}</x-form.label>
@endif

<div {{ $attributes->class([
      'mb-3' => !$check,
      'input-group' => ($prepend || $append),
      "input-group-sm" => $small && ($prepend || $append),
      "input-group-lg" => $large && ($prepend || $append),
      "form-check" => $check,
      "form-switch" => $check && $switch,
      "form-check-inline" => $check && $inline,
      'form-floating' => $floating && !($prepend || $append)
   ]) }}>

  @if($label && !$check && !$floating && !($prepend || $append))<x-form.label :for="$name">{{ $label }}</x-form.label>@endif

  @if($prepend)<div class="input-group-text">{!! $prepend !!}</div>@endif
  {{ $slot }}
  @if($append)<div class="input-group-text">{!! $append !!}</div>@endif

  @if($label && !($prepend || $append) && ($check || $floating))<x-form.label>{{ $label }}</x-form.label>@endif
  @if($help)<x-form.text>{!! $help !!}</x-form.text>@endif
  @error($name, $bag)<x-form.feedback invalid>{{ $message }}</x-form.feedback>@enderror
</div>

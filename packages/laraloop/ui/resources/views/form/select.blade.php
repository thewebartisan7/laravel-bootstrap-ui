@aware([
  'name',
  'help' => null,
  'label' => '',
])

<select {{ $attributes->class([
    'form-select',
    "form-select-sm" => $small,
    "form-select-lg" => $large,
    'is-invalid' => $hasError
])->merge([
    'name' => $name,
    'id' => $name,
    'aria-describedby' => empty($help) ? null : "$name-help",
    'aria-label' => $label
])->whereDoesntStartWith(['options', 'selected']) }}>
  @if($slot->isEmpty())
    @foreach($options as $value => $option)
      @if($isAssoc)
        <option value="{{ $value }}" @if($isSelected($value)) selected @endif>{{ $option }}</option>
      @else
        <option @if($isSelected($option)) selected @endif>{{ $option }}</option>
      @endif
    @endforeach
  @else
    {{ $slot }}
  @endif
</select>

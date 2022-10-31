@aware([
  'name',
  'id' => null,
  'value' => null,
  'type' => 'text',
  'small' => false,
  'large' => false,
  'hasError' => false,
  'checked' => null,
  'help' => null,
  'switch' => false
])

<input type="{{ $type }}"
       name="{{ $name }}"
       id="{{ $id ?? $name }}"
       value="{{ old($name, $value) }}"
{{ $attributes->class([
    'form-control'          => !in_array($type, ['checkbox', 'radio']),
    'form-check-input'      => in_array($type, ['checkbox', 'radio']),
    "form-control-sm"       => $small,
    "form-control-lg"       => $large,
    'is-invalid'            => $hasError
])->merge([
    'checked'           => ($type === 'checkbox' && $checked) ? true : null,
    'aria-describedby'  => isset($help) ? "{$name}-help" : null,
    'role' => $switch ? 'switch' : null
])->whereDoesntStartWith('type') }}>

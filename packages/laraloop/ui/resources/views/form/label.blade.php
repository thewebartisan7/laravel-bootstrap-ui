@aware([
  'name' => null,
  'id' => null,
  'value' => null,
  'colSmall' => false,
  'colLarge' => false,
  'check' => false,
])

<label {{ $attributes->class([
  'form-label' => !$check,
  'form-check-label' => $check,
  'col-form-label-sm' => $colSmall,
  'col-form-label-lg' => $colLarge
])->merge(['for' => $id ?? $name]) }}>
  {{ $slot->isEmpty() ? $value : $slot }}
</label>

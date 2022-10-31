@extends('website::layouts.doc', ['title' => 'Checkbox and Radio'])

@section('content')
    <p class="lead mb-5">
        Create consistent cross-browser and cross-device checkboxes and radios with our completely rewritten checks component.
    </p>

    <x-doc.demo title="Basic example">
      <x-form action="/docs/forms/checkbox-radio" method="get">
        <fieldset class="mb-3">
          <x-form.group name="checkbox-input" label="Checkbox input checked" check>
            <x-form.input type="checkbox" value="checked" checked />
          </x-form.group>

          <x-form.group name="checkbox-input2" label="Checkbox input unchecked" check>
            <x-form.input type="checkbox" value="unchecked" />
          </x-form.group>

          <x-form.group name="checkbox-input3" label="Checkbox input disabled" check>
            <x-form.input type="checkbox" value="disabled" disabled />
          </x-form.group>
        </fieldset>

        <fieldset class="mb-3">
          <x-form.group name="radio-input" id="radio-input1" label="Default radio input" check>
            <x-form.input type="radio" />
          </x-form.group>

          <x-form.group name="radio-input" id="radio-input2" label="Default checked radio input" check>
            <x-form.input type="radio" checked />
          </x-form.group>

          <x-form.group name="radio-input" id="radio-input3" label="Default disabled radio input" check>
            <x-form.input type="radio" disabled />
          </x-form.group>
        </fieldset>

        <fieldset class="mb-3">
          <x-form.group name="checkbox-input4" label="Switch input checked" check switch>
            <x-form.input type="checkbox" value="checked" checked />
          </x-form.group>

          <x-form.group name="checkbox-input5" label="Switch input unchecked" check switch>
            <x-form.input type="checkbox" value="unchecked" />
          </x-form.group>

          <x-form.group name="checkbox-input6" label="Switch input disabled" check switch>
            <x-form.input type="checkbox" value="disabled" disabled />
          </x-form.group>
        </fieldset>

        <x-button type="submit">Submit</x-button>
      </x-form>

      <x-slot name="code">
        @verbatim
<x-form action="/docs/forms/checkbox-radio" method="get">
  <fieldset class="mb-3">
    <x-form.group name="checkbox-input" label="Checkbox input checked" check>
      <x-form.input type="checkbox" value="checked" checked />
    </x-form.group>

    <x-form.group name="checkbox-input2" label="Checkbox input unchecked" check>
      <x-form.input type="checkbox" value="unchecked" />
    </x-form.group>

    <x-form.group name="checkbox-input3" label="Checkbox input disabled" check>
      <x-form.input type="checkbox" value="disabled" disabled />
    </x-form.group>
  </fieldset>

  <fieldset class="mb-3">
    <x-form.group name="radio-input" id="radio-input1" label="Default radio input" check>
      <x-form.input type="radio" />
    </x-form.group>

    <x-form.group name="radio-input" id="radio-input2" label="Default checked radio input" check>
      <x-form.input type="radio" checked />
    </x-form.group>

    <x-form.group name="radio-input" id="radio-input3" label="Default disabled radio input" check>
      <x-form.input type="radio" disabled />
    </x-form.group>
  </fieldset>

  <fieldset class="mb-3">
    <x-form.group name="checkbox-input4" label="Switch input checked" check switch>
      <x-form.input type="checkbox" value="checked" checked />
    </x-form.group>

    <x-form.group name="checkbox-input5" label="Switch input unchecked" check switch>
      <x-form.input type="checkbox" value="unchecked" />
    </x-form.group>

    <x-form.group name="checkbox-input6" label="Switch input disabled" check switch>
      <x-form.input type="checkbox" value="disabled" disabled />
    </x-form.group>
  </fieldset>

  <x-button type="submit">Submit</x-button>
</x-form>
        @endverbatim
      </x-slot>
    </x-doc.demo>




    <x-doc.demo title="Inline example">
      <x-form action="/docs/forms/checkbox-radio" method="get">
        <x-form.group name="checkbox-input4" label="1" check inline>
          <x-form.input type="checkbox" value="checked" checked />
        </x-form.group>

        <x-form.group name="checkbox-input5" label="2" check inline>
          <x-form.input type="checkbox" value="unchecked" />
        </x-form.group>

        <x-form.group name="checkbox-input6" label="3 (disabled)" check inline>
          <x-form.input type="checkbox" value="disabled" disabled />
        </x-form.group>

        <hr class="invisible">

        <x-form.group name="radio-input2" id="radio-input4" label="1" check inline>
          <x-form.input type="radio" value="checked" checked />
        </x-form.group>

        <x-form.group name="radio-input2" id="radio-input5" label="2" check inline>
          <x-form.input type="radio" value="unchecked" />
        </x-form.group>

        <x-form.group name="radio-input2" id="radio-input6" label="3 (disabled)" check inline>
          <x-form.input type="radio" value="disabled" disabled />
        </x-form.group>
      </x-form>

      <x-slot name="code">
        @verbatim
<x-form action="/docs/forms/checkbox-radio" method="get">
  <x-form.group name="checkbox-input4" label="1" check inline>
    <x-form.input type="checkbox" value="checked" checked />
  </x-form.group>

  <x-form.group name="checkbox-input5" label="2" check inline>
    <x-form.input type="checkbox" value="unchecked" />
  </x-form.group>

  <x-form.group name="checkbox-input6" label="3 (disabled)" check inline>
    <x-form.input type="checkbox" value="disabled" disabled />
  </x-form.group>


  <x-form.group name="radio-input2" id="radio-input4" label="1" check inline>
    <x-form.input type="radio" value="checked" checked />
  </x-form.group>

  <x-form.group name="radio-input2" id="radio-input5" label="2" check inline>
    <x-form.input type="radio" value="unchecked" />
  </x-form.group>

  <x-form.group name="radio-input2" id="radio-input6" label="3 (disabled)" check inline>
    <x-form.input type="radio" value="disabled" disabled />
  </x-form.group>
</x-form>
        @endverbatim
      </x-slot>
    </x-doc.demo>
@endsection

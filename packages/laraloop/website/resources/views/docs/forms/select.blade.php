@extends('website::layouts.doc', ['title' => 'Forms'])

@section('content')
    <p class="lead mb-5">
        Customize the native <code>&lt;select&gt;</code>s with custom CSS that changes the element’s initial appearance.
    </p>

    <x-doc.demo title="Basic example" description="Here’s a quick example to demonstrate form component styles.">
      <x-form action="/docs/forms/select" method="get">
        <x-form.group name="basic-select" label="Basic select">
          <x-form.select>
            <option>Select</option>
            <option selected>First</option>
            <option>Second</option>
            <option>Third</option>
          </x-form.select>
        </x-form.group>

        <x-form.group name="basic-select2" label="Basic select two">
          <x-form.select :options="['Select', 'First', 'Second', 'Third']" selected="Second" />
        </x-form.group>

        <x-form.group name="basic-select3" label="Basic with value">
          <x-form.select :options="['' => 'Select', 'first' => 'First', 'second' => 'Second', 'third' => 'Third']" selected="third" />
        </x-form.group>

        <x-form.group name="basic-multiple" label="Basic multiple">
          <x-form.select :options="['Select', 'First', 'Second', 'Third']" :selected="['First', 'Second']" multiple />
        </x-form.group>

        <x-form.group name="basic-multiple2" label="Basic multiple with size 3">
          <x-form.select :options="['Select', 'First', 'Second', 'Third']" :selected="['Second', 'Third']" multiple size="3" />
        </x-form.group>

        <x-button type="submit">Submit</x-button>
      </x-form>

      <x-slot name="code">
        @verbatim
<x-form action="/docs/forms/select" method="get">
  <x-form.group name="basic-select" label="Basic select">
    <x-form.select>
      <option>Select</option>
      <option selected>First</option>
      <option>Second</option>
      <option>Third</option>
    </x-form.select>
  </x-form.group>

  <x-form.group name="basic-select2" label="Basic select two">
    <x-form.select :options="['Select', 'First', 'Second', 'Third']" selected="Second" />
  </x-form.group>

  <x-form.group name="basic-select3" label="Basic with value">
    <x-form.select :options="['' => 'Select', 'first' => 'First', 'second' => 'Second', 'third' => 'Third']" selected="third" />
  </x-form.group>

  <x-form.group name="basic-multiple" label="Basic multiple">
    <x-form.select :options="['Select', 'First', 'Second', 'Third']" :selected="['First', 'Second']" multiple />
  </x-form.group>

  <x-form.group name="basic-multiple2" label="Basic multiple with size 3">
    <x-form.select :options="['Select', 'First', 'Second', 'Third']" :selected="['Second', 'Third']" multiple size="3" />
  </x-form.group>

  <x-button type="submit">Submit</x-button>
</x-form>
        @endverbatim
      </x-slot>
    </x-doc.demo>




    <x-doc.demo title="With help text" description="An example using help text.">
      <x-form action="/docs/forms/select" method="get">

        <x-form.group name="select-with-describe" label="Basic select two" help="This is a help block via prop help">
          <x-form.select :options="['Select', 'First', 'Second', 'Third']" selected="Second" />
        </x-form.group>

        <x-button type="submit">Submit</x-button>
      </x-form>

      <x-slot name="code">
        @verbatim
          <x-form action="/docs/forms/select" method="get">

<x-form.group name="select-with-describe" label="Basic select two" help="This is a help block via prop help">
  <x-form.select :options="['Select', 'First', 'Second', 'Third']" selected="Second" />
</x-form.group>

            <x-button type="submit">Submit</x-button>
          </x-form>
        @endverbatim
      </x-slot>
    </x-doc.demo>
@endsection

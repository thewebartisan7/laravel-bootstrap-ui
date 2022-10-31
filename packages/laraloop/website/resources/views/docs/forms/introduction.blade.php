@extends('website::layouts.doc', ['title' => 'Forms'])

@section('content')
    <p class="lead mb-5">
      Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
    </p>

    <x-doc.demo title="Basic example" description="Here’s a quick example to demonstrate form component styles.">
        <x-form action="/docs/forms/introduction" method="get" data-controller="validate" novalidate>
            <x-form.group name="first-input" label="First input">
                <x-form.input placeholder="First input" maxlength="255" required/>
            </x-form.group>

            <x-form.group name="second-input" label="Input with helper text" help="This is a form helper text">
                <x-form.input placeholder="Second input" maxlength="255" required/>
            </x-form.group>

            <x-form.group name="third-input" label="Third input type checkbox" check>
                <x-form.input type="checkbox" />
            </x-form.group>

            <x-button type="submit">Submit</x-button>
        </x-form>

        <x-slot name="code">
            @verbatim
<x-form action="/docs/forms/introduction" method="get" data-controller="validate" novalidate>
    <x-form.group name="first-input" label="First input">
        <x-form.input placeholder="First input" maxlength="255" required/>
    </x-form.group>

    <x-form.group name="second-input" label="Input with helper text" help="This is a form helper text">
        <x-form.input placeholder="Second input" maxlength="255" required/>
    </x-form.group>

    <x-form.group name="third-input" label="Third input type checkbox" check>
        <x-form.input type="checkbox" />
    </x-form.group>

    <x-button type="submit">Submit</x-button>
</x-form>
            @endverbatim
        </x-slot>
    </x-doc.demo>


    <x-doc.demo title="Horizona layout example">
      <x-slot name="decription">
        Give your forms a horizontal layout using <code>x-form.horizonal</code> instead of <code>x-form.group</code>.
      </x-slot>

      <x-form action="/docs/forms/introduction" method="get" data-controller="validate" novalidate>
        <x-form.horizontal name="first-input" label="First input">
          <x-form.input placeholder="First input" maxlength="255" required/>
        </x-form.horizontal>

        <x-form.horizontal name="second-input" label="Input with helper text" help="This is a form helper text">
          <x-form.input placeholder="Second input" maxlength="255" required/>
        </x-form.horizontal>

        <x-form.horizontal name="third-input" label="Third input type checkbox" check>
          <x-form.input type="checkbox" />
        </x-form.horizontal>

        <x-button type="submit">Submit</x-button>
      </x-form>

      <x-slot name="code">
        @verbatim
          <x-form action="/docs/forms/introduction" method="get" data-controller="validate" novalidate>
            <x-form.horizontal name="first-input" label="First input">
              <x-form.input placeholder="First input" maxlength="255" required/>
            </x-form.horizontal>

            <x-form.horizontal name="second-input" label="Input with helper text" help="This is a form helper text">
              <x-form.input placeholder="Second input" maxlength="255" required/>
            </x-form.horizontal>

            <x-form.horizontal name="third-input" label="Third input type checkbox" check>
              <x-form.input type="checkbox" />
            </x-form.horizontal>

            <x-button type="submit">Submit</x-button>
          </x-form>
        @endverbatim
      </x-slot>
    </x-doc.demo>
@endsection

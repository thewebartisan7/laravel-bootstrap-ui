@extends('website::layouts.doc', ['title' => 'Input'])

@section('content')
    <p class="lead mb-5">
        Give textual form controls like <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.
    </p>

    <x-doc.demo title="Basic example" description="">
        <x-form.group name="small-input" label="Small size input" small>
            <x-form.input placeholder="Small input" maxlength="255" required/>
        </x-form.group>

        <x-form.group name="default-input" label="Default size input">
            <x-form.input placeholder="Default size input" maxlength="255" required/>
        </x-form.group>

        <x-form.group name="large-input" label="Large size input" large>
            <x-form.input placeholder="Large input" maxlength="255" required/>
        </x-form.group>

        <x-slot name="code">
            @verbatim
<x-form.group name="small-input" label="Small input" small>
    <x-form.input placeholder="Small input" maxlength="255" required/>
</x-form.group>

<x-form.group name="default-input" label="Default size input">
    <x-form.input placeholder="Default size input" maxlength="255" required/>
</x-form.group>

<x-form.group name="large-input" value="Large input" large>
    <x-form.input placeholder="Large input" maxlength="255" required/>
</x-form.group>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Prepend and append" description="Place one add-on or button on either side of an input. You may also place one on both sides of an input.">
        <x-form.group name="append-input" append="@" label="Append input">
            <x-form.input placeholder="Append input" maxlength="255" required/>
        </x-form.group>

        <x-form.group name="prepend-input" prepend="@example.com" label="Prepend input">
            <x-form.input placeholder="Prepend input" maxlength="255" required/>
        </x-form.group>

        <x-slot name="code">
            @verbatim
<x-form.group name="append-input" append="@" label="Append input">
    <x-form.input placeholder="Append input" maxlength="255" required/>
</x-form.group>

<x-form.group name="append-input" prepend="@example.com" label="Prepend input">
    <x-form.input placeholder="Prepend input" maxlength="255" required/>
</x-form.group>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Floating label" description="Create beautifully simple form labels that float over your input fields.">
        <x-form.group name="floating-label-input" label="Floating label input" floating>
            <x-form.input placeholder="Floating label input" maxlength="255" required/>
        </x-form.group>

        <x-slot name="code">
            @verbatim
<x-form.group name="floating-label-input" label="Floating label input" floating>
    <x-form.input placeholder="Floating label input" maxlength="255" required/>
</x-form.group>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

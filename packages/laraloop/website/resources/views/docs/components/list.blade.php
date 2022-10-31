@extends('website::layouts.doc', ['title' => 'List'])

@section('content')
    <h4>How it works</h4>
    <p>
        List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.
    </p>

    <x-doc.demo title="Basic example" description="The most basic list group is an unordered list with list items and the proper classes.">
        <x-list-group>
            <x-list-group.item label="An item" />
            <x-list-group.item label="A second item" />
            <x-list-group.item label="A third item" />
            <x-list-group.item label="A fourth item" />
            <x-list-group.item label="And a fifth one" />
        </x-list-group>

        <x-slot name="code">
            @verbatim
<x-list-group>
    <x-list-group.item label="An item" />
    <x-list-group.item label="A second item" />
    <x-list-group.item label="A third item" />
    <x-list-group.item label="A fourth item" />
    <x-list-group.item label="And a fifth one" />
</x-list-group>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="List of links example">
        <x-slot name="description">
            It's easy to create a list of links markup by setting prop <code>:list="false"</code>.
        </x-slot>
        <x-list-group :list="false">
            <x-list-group.item href="#" label="An item" />
            <x-list-group.item href="#" label="A second item" />
            <x-list-group.item href="#" label="A third item" />
            <x-list-group.item href="#" label="A fourth item" />
            <x-list-group.item href="#" label="And a fifth one" />
        </x-list-group>

        <x-slot name="code">
            @verbatim
<x-list-group :list="false">
    <x-list-group.item href="#" label="An item" />
    <x-list-group.item href="#" label="A second item" />
    <x-list-group.item href="#" label="A third item" />
    <x-list-group.item href="#" label="A fourth item" />
    <x-list-group.item href="#" label="And a fifth one" />
</x-list-group>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Using components example" description="If you like semantic markup like me, you will appreciate the alternative creation of markup.">
        <x-list-group.ul>
            <x-list-group.item.li>
                A list item using component <code>x-list-group.ul</code> and <code>x-list-group.item.li</code>
            </x-list-group.item.li>
            <x-list-group.item.li label="A second item" />
        </x-list-group.ul>

        <hr>

        <x-list-group>
            <x-list-group.item.a href="#">
                A list item using component <code>x-list-group</code> and <code>x-list-group.item.a</code>
            </x-list-group.item.a>
            <x-list-group.item.a href="#" label="A second item" />
        </x-list-group>

        <hr>

        <x-list-group>
            <x-list-group.item.button>
                A list item in a UL list using component <code>x-list-group</code> and <code>x-list-group.item.button</code>
            </x-list-group.item.button>
            <x-list-group.item.button label="A second item" />
        </x-list-group>

        <x-slot name="code">
            @verbatim
<x-list-group.ul>
    <x-list-group.item.li>
        A list item using component <code>x-list-group.ul</code> and <code>x-list-group.item.li</code>
    </x-list-group.item.li>
    <x-list-group.item.li label="A second item" />
</x-list-group.ul>

<x-list-group>
    <x-list-group.item.a href="#">
        A list item using component <code>x-list-group</code> and <code>x-list-group.item.a</code>
    </x-list-group.item.a>
    <x-list-group.item.a href="#" label="A second item" />
</x-list-group>

<x-list-group>
    <x-list-group.item.button>
        A list item in a UL list using component <code>x-list-group</code> and <code>x-list-group.item.button</code>
    </x-list-group.item.button>
    <x-list-group.item.button label="A second item" />
</x-list-group>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

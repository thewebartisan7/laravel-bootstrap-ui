@extends('website::layouts.doc', ['title' => 'Button'])

@section('content')
    <h4>How it works</h4>
    <p>
        Use Bootstrap's custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.
        There is three types of tags that can be used for create a button: <code>button</code>, <code>a</code> and <code>input</code>.
    </p>

    <x-doc.demo title="Basic example">
        <x-button>Default</x-button>
        <x-button type="submit">Submit</x-button>
        <x-button disabled>Disabled</x-button>
        <x-button.link>Link</x-button.link>
        <x-button.link href="/docs/components/buttons">Link</x-button.link>
        <x-button.link disabled>Disabled Link</x-button.link>
        <x-button.input>Type input</x-button.input>
        <x-slot name="code">
            @verbatim
<x-button>Default</x-button>
<x-button type="submit">Submit</x-button>
<x-button disabled>Disabled</x-button>
<x-button.link>Link</x-button.link>
<x-button.link href="/docs/components/buttons">Link</x-button.link>
<x-button.link disabled>Disabled Link</x-button.link>
<x-button.input>Type input</x-button.input>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Colored example">
        <x-slot name="description">
            Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.
            In need of a button, but not the hefty background colors they bring? Add prop <code>outline</code> to remove all background colors on any button.
        </x-slot>

        @foreach(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'] as $color)
            <x-button :color="$color">{{ ucfirst($color) }}</x-button>
        @endforeach
        <hr>
        @foreach(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'] as $color)
            <x-button :color="$color" outline>{{ ucfirst($color) }}</x-button>
        @endforeach
        <x-slot name="code">
            @verbatim
<x-button color="primary">primary</x-button>
<x-button color="secondary">secondary</x-button>
<x-button color="success">success</x-button>
<x-button color="danger">danger</x-button>
<x-button color="warning">warning</x-button>
<x-button color="info">info</x-button>
<x-button color="light">light</x-button>
<x-button color="dark">dark</x-button>
<x-button color="link">link</x-button>

<x-button color="primary" outline>primary</x-button>
<x-button color="secondary" outline>secondary</x-button>
<x-button color="success" outline>success</x-button>
<x-button color="danger" outline>danger</x-button>
<x-button color="warning" outline>warning</x-button>
<x-button color="info" outline>info</x-button>
<x-button color="light" outline>light</x-button>
<x-button color="dark" outline>dark</x-button>
<x-button color="link" outline>link</x-button>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Sizes" description="">
        <x-slot name="description">
            All sizes variant. Use prop <code>small</code> or <code>large</code> to change default button size.
        </x-slot>

        <x-button small>Small</x-button>
        <x-button>Normal</x-button>
        <x-button large>Large</x-button>
        <x-slot name="code">
            @verbatim
<x-button small>Small</x-button>
<x-button>Normal</x-button>
<x-button large>Large</x-button>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Toggle states">
        <x-slot name="description">
            Button with toggle states. Add prop <code>active</code> to make active by default.
        </x-slot>

        <x-button toggle="button">Toggle Button</x-button>
        <x-button toggle="button" active>Active</x-button>
        <x-button toggle="button">Toggle Link</x-button>
        <x-button toggle="button" active>Active Link</x-button>
        <x-slot name="code">
            @verbatim
<x-button toggle="button">Toggle Button</x-button>
<x-button toggle="button" active>Active</x-button>
<x-button toggle="button">Toggle Link</x-button>
<x-button toggle="button" active>Active Link</x-button>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Button group">
        <x-slot name="description">
            Group a series of buttons together on a single line or stack them in a vertical column by wrapping buttons inside component <code>x-button.group</code> as shown below.
            Ensure correct label for assistive technologies such as screen readers by using prop <code>label</code>.
            You can also use prop <code>size</code> to <code>x-button.group</code> component instead of applying button sizing to every button in a group.
        </x-slot>

        <x-button.group label="My button group">
            <x-button.link active current>Left</x-button.link>
            <x-button.link>Middle</x-button.link>
            <x-button.link>Right</x-button.link>
        </x-button.group>

        <hr>

        <x-button.group label="My large button group" size="lg">
            <x-button.link active current>Left</x-button.link>
            <x-button.link>Middle</x-button.link>
            <x-button.link>Right</x-button.link>
        </x-button.group>

        <x-slot name="code">
            @verbatim
<x-button.group label="My button group">
    <x-button.link active current>Left</x-button.link>
    <x-button.link>Middle</x-button.link>
    <x-button.link>Right</x-button.link>
</x-button.group>

<x-button.group label="My large button group" size="lg">
    <x-button.link active current>Left</x-button.link>
    <x-button.link>Middle</x-button.link>
    <x-button.link>Right</x-button.link>
</x-button.group>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Button toolbar">
        <x-slot name="description">
            Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.
            Ensure correct label for assistive technologies such as screen readers by using prop <code>label</code>.
        </x-slot>

        <x-button.toolbar label="My button toolbar">
            <x-button.group label="My first button group" class="me-2">
                <x-button.link active current>1</x-button.link>
                <x-button.link>2</x-button.link>
                <x-button.link>3</x-button.link>
            </x-button.group>

            <x-button.group label="My second button group">
                <x-button.link>4</x-button.link>
                <x-button.link>5</x-button.link>
                <x-button.link>6</x-button.link>
            </x-button.group>
        </x-button.toolbar>

        <x-slot name="code">
            @verbatim
<x-button.toolbar label="My button toolbar">
    <x-button.group label="My first button group" class="me-2">
        <x-button.link active current>1</x-button.link>
        <x-button.link>2</x-button.link>
        <x-button.link>3</x-button.link>
    </x-button.group>

    <x-button.group label="My second button group">
        <x-button.link>4</x-button.link>
        <x-button.link>5</x-button.link>
        <x-button.link>6</x-button.link>
    </x-button.group>
</x-button.toolbar>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

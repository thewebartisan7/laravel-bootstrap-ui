@extends('website::layouts.doc', ['title' => 'Dropdown'])

@section('content')
    <h4>How it works</h4>
    <p>
        Use Bootstrap's custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.
        There is three types of tags that can be used for create a button: <code>button</code>, <code>a</code> and <code>input</code>.
    </p>

    <x-doc.demo title="Basic example">
        <x-dropdown id="BasicDemo">
            <x-dropdown.toggle>Toggle dropdown</x-dropdown.toggle>
            <x-dropdown.menu>
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
            </x-dropdown.menu>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="BasicDemo">
    <x-dropdown.toggle>Toggle dropdown</x-dropdown.toggle>
    <x-dropdown.menu>
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
    </x-dropdown.menu>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-alert class="mt-3">
        You can use prop <code>to</code> instead of <code>href</code> for <code>x-dropdown.item</code>'s component.
        In this case behind the scene will be used <a href="/docs/components/link">link component</a>,
        which make the link active automagically by checking current route name or current URL.
    </x-alert>

    <x-doc.demo title="List example">
        <x-slot name="description">
            By default the dropdown items are link wrapped inside a div tag. If you want to use instead use a <code>ul</code>, then pass prop <code>list</code>.
            Simple as that?
        </x-slot>
        <x-dropdown id="ListDemo" list>
            <x-dropdown.toggle>Toggle dropdown list</x-dropdown.toggle>
            <x-dropdown.menu>
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
            </x-dropdown.menu>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="ListDemo" list>
    <x-dropdown.toggle>Toggle dropdown list</x-dropdown.toggle>
    <x-dropdown.menu>
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
    </x-dropdown.menu>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Using different dropdown toggle">
        <x-slot name="description">
            Bootstrap has three type of dropdown toggle: button, link or button split.
            Use component <code>x-dropdown.toggle.a</code> or <code>x-dropdown.toggle.split</code> for toggle dropdown with a link or button split.
            By default, it's a button.
            You can use directly the component <code>x-dropdown.toggle.button</code>, <code>x-dropdown.toggle.a</code> and <code>x-dropdown.toggle.split</code>
            Or you just pass prop <code>type</code> to <code>x-dropdown.toggle</code>.
        </x-slot>

        <x-dropdown id="ToggleDemo">
            <x-dropdown.toggle.a>Toggle dropdown link</x-dropdown.toggle.a>
            <x-dropdown.menu>
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
            </x-dropdown.menu>
        </x-dropdown>

        <br><br>

        <x-dropdown id="ToggleDemo2" split>
            <x-dropdown.toggle>Toggle dropdown split</x-dropdown.toggle>
            <x-dropdown.menu>
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
            </x-dropdown.menu>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="ToggleDemo">
    <x-dropdown.toggle.a>Toggle dropdown link</x-dropdown.toggle.a>
    <x-dropdown.menu>
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
    </x-dropdown.menu>
</x-dropdown>

<x-dropdown id="ToggleDemo2" split>
    <x-dropdown.toggle>Toggle dropdown split</x-dropdown.toggle>
    <x-dropdown.menu>
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" aria-current="true" active>Link three</x-dropdown.item>
    </x-dropdown.menu>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-alert type="warning" class="mt-3">
        It's important to add prop <code>split</code> to dropdown because also <code>.dropdown</code> need to have a class <code>.btn-group</code> in order to display correctly the split button.
        The prop split it's passed down to component <code>x-dropdown.toggle</code> and used to display the split button.
    </x-alert>

    <x-doc.demo title="Dropdown as list using component">
        <x-slot name="description">
            You can also use component <code>x-dropdown.menu.ul</code> for create a dropdown as list.
        </x-slot>

        <x-dropdown id="ListDemo2">
            <x-dropdown.toggle>Toggle dropdown list</x-dropdown.toggle>
            <x-dropdown.menu.ul>
                <x-dropdown.item.li href="/docs/components/introduction">Link one</x-dropdown.item.li>
                <x-dropdown.item.li href="/docs/components/accordion">Link two</x-dropdown.item.li>
                <x-dropdown.divider.li/>
                <x-dropdown.item.li href="/docs/components/dropdown" active>Link three</x-dropdown.item.li>
            </x-dropdown.menu.ul>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="ListDemo2">
    <x-dropdown.toggle>Toggle dropdown list</x-dropdown.toggle>
    <x-dropdown.menu.ul>
        <x-dropdown.item.li href="/docs/components/introduction">Link one</x-dropdown.item.li>
        <x-dropdown.item.li href="/docs/components/accordion">Link two</x-dropdown.item.li>
        <x-dropdown.divider.li/>
        <x-dropdown.item.li href="/docs/components/dropdown" active>Link three</x-dropdown.item.li>
    </x-dropdown.menu.ul>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Dropdown size">
        <x-slot name="description">
            You can use prop <code>size</code> to change size of dropdown.
        </x-slot>

        <x-dropdown id="SizeLargeDemo" size="lg">
            <x-dropdown.toggle>Toggle dropdown large</x-dropdown.toggle>
            <x-dropdown.menu>
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
            </x-dropdown.menu>
        </x-dropdown>

        <br><br>

        <x-dropdown id="SizeSmallDemo" size="sm">
            <x-dropdown.toggle>Toggle dropdown small</x-dropdown.toggle>
            <x-dropdown.menu>
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
            </x-dropdown.menu>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="SizeLargeDemo" size="lg">
    <x-dropdown.toggle>Toggle dropdown large</x-dropdown.toggle>
    <x-dropdown.menu>
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
    </x-dropdown.menu>
</x-dropdown>

<x-dropdown id="SizeSmallDemo" size="sm">
    <x-dropdown.toggle>Toggle dropdown small</x-dropdown.toggle>
    <x-dropdown.menu>
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
    </x-dropdown.menu>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Dropdown dark">
        <x-slot name="description">
            You can use prop <code>dark</code> to make your dropdown dark.
        </x-slot>

        <x-dropdown id="DarkDemo" dark>
            <x-dropdown.toggle color="secondary">Toggle dropdown dark</x-dropdown.toggle>
            <x-dropdown.menu.ul>
                <x-dropdown.item.li href="/docs/components/introduction">Link one</x-dropdown.item.li>
                <x-dropdown.item.li href="/docs/components/accordion">Link two</x-dropdown.item.li>
                <x-dropdown.divider.li/>
                <x-dropdown.item.li href="/docs/components/dropdown" active>Link three</x-dropdown.item.li>
            </x-dropdown.menu.ul>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="DarkDemo" dark>
    <x-dropdown.toggle color="secondary">Toggle dropdown dark</x-dropdown.toggle>
    <x-dropdown.menu.ul>
        <x-dropdown.item.li href="/docs/components/introduction">Link one</x-dropdown.item.li>
        <x-dropdown.item.li href="/docs/components/accordion">Link two</x-dropdown.item.li>
        <x-dropdown.divider.li/>
        <x-dropdown.item.li href="/docs/components/dropdown" active>Link three</x-dropdown.item.li>
    </x-dropdown.menu.ul>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-alert type="warning" class="mt-3">
        As you may notice we have add prop <code>color</code> to dropdown toggle. You can also add this prop on component <code>x-dropdown</code>.
        As with other props, also these are passed down to child components.
    </x-alert>


    <x-doc.demo title="Dropdown positions">
        <x-slot name="description">
            You can use prop <code>position</code> to change the position of the dropdown.
        </x-slot>

        <div class="d-flex justify-content-around">
            @foreach(['up' => 'Dropup', 'end' => 'Dropend', 'start' => 'Dropstart'] as $position => $name)
                <x-dropdown :id="$name" :position="$position">
                    <x-dropdown.toggle>Toggle {{ $name }}</x-dropdown.toggle>

                    <x-dropdown.menu>
                        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                        <x-dropdown.divider/>
                        <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
                    </x-dropdown.menu>
                </x-dropdown>
            @endforeach
        </div>

        <x-slot name="code">
            @verbatim
<x-dropdown id="Dropup" position="up">
    <x-dropdown.toggle>Toggle Dropup</x-dropdown.toggle>

    <!-- dropdown.menu go here -->
</x-dropdown>

<x-dropdown id="Dropend" position="end">
    <x-dropdown.toggle>Toggle Dropend</x-dropdown.toggle>

    <!-- dropdown.menu go here -->
</x-dropdown>

<x-dropdown id="Dropstart" position="start">
    <x-dropdown.toggle>Toggle Dropstart</x-dropdown.toggle>

    <!-- dropdown.menu go here -->
</x-dropdown>

<!-- It's also valid to use prop up|end|start -->
<x-dropdown id="Dropstart" end>
    <x-dropdown.toggle>Toggle Dropend</x-dropdown.toggle>

    <!-- dropdown.menu go here -->
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-alert type="warning" class="mt-3">
        You can also use props <code>up</code>, <code>start</code> and <code>end</code> to obtain the same thing
        as shown in last example.
    </x-alert>

    <x-doc.demo title="Dropdown using slot">
        <x-slot name="description">
            If you want to use slots instead of child components, then find below an example.
        </x-slot>

        <x-dropdown id="SlotDemo">
            <x-slot name="toggle">Toggle dropdown</x-slot>
            <x-slot name="menu">
                <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                <x-dropdown.divider/>
                <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
            </x-slot>
        </x-dropdown>

        <x-slot name="code">
            @verbatim
<x-dropdown id="SlotDemo">
    <x-slot name="toggle">Toggle dropdown</x-slot>
    <x-slot name="menu">
        <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
        <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
        <x-dropdown.divider/>
        <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
    </x-slot>
</x-dropdown>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Dropstart with split button">
        <x-slot name="description">
            Dropstart with split button require a different markup than others, so if you need such case, you can find below an example.
            See <a href="https://getbootstrap.com/docs/5.1/components/dropdowns/#dropleft" target="_blank">bootstrap docs</a> about such markup.
        </x-slot>

        <x-button.group>
            <x-dropdown id="DropstartSplitDemo" start group>
                <x-button toggle="dropdown" aria-expanded="false" class="dropdown-toggle dropdown-toggle-split">
                    <span class="visually-hidden">Toggle Dropstart</span>
                </x-button>
                <x-dropdown.menu>
                    <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
                    <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
                    <x-dropdown.divider/>
                    <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
                </x-dropdown.menu>
            </x-dropdown>
            <x-button>Split dropstart</x-button>
        </x-button.group>

        <x-slot name="code">
            @verbatim
<x-button.group>
    <x-dropdown id="DropstartSplitDemo" start group>
        <x-button toggle="dropdown" aria-expanded="false" class="dropdown-toggle dropdown-toggle-split">
            <span class="visually-hidden">Toggle Dropstart</span>
        </x-button>
        <x-dropdown.menu>
            <x-dropdown.item href="/docs/components/introduction">Link one</x-dropdown.item>
            <x-dropdown.item href="/docs/components/accordion">Link two</x-dropdown.item>
            <x-dropdown.divider/>
            <x-dropdown.item href="/docs/components/dropdown" active>Link three</x-dropdown.item>
        </x-dropdown.menu>
    </x-dropdown>
    <x-button>Split dropstart</x-button>
</x-button.group>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

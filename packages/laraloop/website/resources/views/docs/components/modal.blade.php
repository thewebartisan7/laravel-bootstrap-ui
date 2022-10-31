@extends('website::layouts.doc', ['title' => 'Modal'])

@section('content')
    <h4>How it works</h4>
    <p>
        Use Bootstrap's JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.
    </p>

    <x-doc.demo title="Basic example" description="Click the button below to open the modal.">
        <x-modal.toggle id="ComponentExample" class="btn btn-primary mb-3">Open modal with component</x-modal.toggle>
        <x-modal.toggle.a id="SlotExample" class="btn btn-success mb-3">Open modal with slot</x-modal.toggle.a>

        <x-modal id="ComponentExample">
            <x-modal.dialog>
                <x-modal.content>
                    <x-modal.header>My modal title</x-modal.header>

                    <x-modal.body>
                        Hi, there! I'm a modal build with blade component.
                    </x-modal.body>

                    <x-modal.footer>
                        <a href="#" class="btn btn-danger">Action</a>
                    </x-modal.footer>
                </x-modal.content>
            </x-modal.dialog>
        </x-modal>

        <x-modal id="SlotExample">
            <x-modal.dialog>
                <x-modal.content>
                    <x-slot name="header">My modal title via slot</x-slot>

                    <x-slot name="body">
                        Hi, there! My modal body via slot.
                    </x-slot>

                    <x-slot name="footer">
                        <a href="#" class="btn btn-danger">Action via slot</a>
                    </x-slot>
                </x-modal.content>
            </x-modal.dialog>
        </x-modal>

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="ComponentExample" class="btn btn-primary mb-3">Open modal with component</x-modal.toggle>
<x-modal.toggle.a id="SlotExample" class="btn btn-success mb-3">Open modal with slot</x-modal.toggle.a>

<x-modal id="ComponentExample">
    <x-modal.dialog>
        <x-modal.content>
            <x-modal.header>My modal title</x-modal.header>

            <x-modal.body>
                Hi, there! I'm a modal build with blade component.
            </x-modal.body>

            <x-modal.footer>
                <a href="#" class="btn btn-danger">Action</a>
            </x-modal.footer>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>

<x-modal id="SlotExample">
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">My modal title via slot</x-slot>

            <x-slot name="body">
                Hi, there! My modal body via slot.
            </x-slot>

            <x-slot name="footer">
                <a href="#" class="btn btn-danger">Action via slot</a>
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Static example">
        <x-slot name="description">
            Add prop <code>static</code> for make the modal static. When backdrop is set to static,
            the modal will not close when clicking outside it. Click the button below to try it.
        </x-slot>
        <x-modal.toggle id="StaticExample" class="btn btn-dark mb-3">Open static modal</x-modal.toggle>
        <x-modal id="StaticExample" static>
            <x-modal.dialog>
                <x-modal.content>
                    <x-slot name="header">I'm a static modal</x-slot>

                    <x-slot name="body">
                        Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#static-backdrop">static modal</a> by adding attribute "static".
                        <br>
                        When backdrop is set to static, the modal will not close when clicking outside it.
                    </x-slot>
                </x-modal.content>
            </x-modal.dialog>
        </x-modal>

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="StaticExample" class="btn btn-dark mb-3">Open static modal</x-modal.toggle>
<x-modal id="StaticExample" static>
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">I'm a static modal</x-slot>

            <x-slot name="body">
                Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#static-backdrop">static modal</a> by adding attribute "static".
                <br>
                When backdrop is set to static, the modal will not close when clicking outside it.
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Scrollable example">
        <x-slot name="description">
            Add prop <code>scrollable</code> for make the modal scrollable. When modals become too long for the user's viewport or device,
            they scroll independent of the page itself. Try the demo below to see what we mean.
        </x-slot>
        <x-modal.toggle id="ScrollableExample" class="btn btn-success mb-3">Open scrollable modal</x-modal.toggle>
        <x-modal id="ScrollableExample" scrollable>
            <x-modal.dialog>
                <x-modal.content>
                    <x-slot name="header">I'm a scrollable modal</x-slot>
                    <x-slot name="body">
                        Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#scrolling-long-content">scrollable modal</a> by adding attribute "scrollable".
                        <br>
                        When modals become too long for the user’s viewport or device, they scroll independent of the page itself.
                        @for($i = 0; $i < 100; $i++)
                            <br>
                        @endfor
                    </x-slot>
                </x-modal.content>
            </x-modal.dialog>
        </x-modal>

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="ScrollableExample" class="btn btn-success mb-3">Open scrollable modal</x-modal.toggle>
<x-modal id="ScrollableExample" scrollable>
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">I'm a scrollable modal</x-slot>
            <x-slot name="body">
                Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#scrolling-long-content">scrollable modal</a> by adding attribute "scrollable".
                <br>
                When modals become too long for the user’s viewport or device, they scroll independent of the page itself.
                @for($i = 0; $i < 100; $i++)
                    <br>
                @endfor
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Centered example" description="Click the button below to open the modal.">
        <x-slot name="description">
            Add prop <code>centered</code> for make the modal vertically centered.
        </x-slot>
        <x-modal.toggle id="CenteredExample" class="btn btn-primary">Open centered modal</x-modal.toggle>
        <x-modal id="CenteredExample" centered>
            <x-modal.dialog>
                <x-modal.content>
                    <x-slot name="header">I'm a centered modal</x-slot>

                    <x-slot name="body">
                        Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#vertically-centered">vertically centered modal</a> by adding attribute "centered".
                        <br>
                        Vertically center a modal.
                    </x-slot>
                </x-modal.content>
            </x-modal.dialog>
        </x-modal>

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="CenteredExample" class="btn btn-primary">Open centered modal</x-modal.toggle>
<x-modal id="CenteredExample" centered>
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">I'm a centered modal</x-slot>

            <x-slot name="body">
                Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#vertically-centered">vertically centered modal</a> by adding attribute "centered".
                <br>
                Vertically center a modal.
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Sizes example">
        <x-slot name="description">
            Modals have three optional sizes, available via prop <code>size="sm|lg|xl"</code>.
            These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.
        </x-slot>
        @foreach(['sm' => 'small', 'lg' => 'large', 'xl' => 'extra large'] as $size => $name)
            <x-modal.toggle id="SizeExample-{{ $size }}" class="btn btn-secondary mb-3">Open {{ $name }} modal</x-modal.toggle>
            <x-modal id="SizeExample-{{ $size }}" :size="$size">
                <x-modal.dialog>
                    <x-modal.content>
                        <x-slot name="header">I'm a {{ $name }} modal</x-slot>
                        <x-slot name="body">
                            Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#optional-sizes">modal sizes</a> using size="{{ $size }}".
                        </x-slot>
                    </x-modal.content>
                </x-modal.dialog>
            </x-modal>
        @endforeach

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="SizeExample-1" class="btn btn-secondary mb-3">Open small modal</x-modal.toggle>
<x-modal id="SizeExample-1" size="sm">
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">I'm a small modal</x-slot>
            <x-slot name="body">
                Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#optional-sizes">modal sizes</a> using size="sm".
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>

<x-modal.toggle id="SizeExample-2" class="btn btn-secondary mb-3">Open large modal</x-modal.toggle>
<x-modal id="SizeExample-2" size="lg">
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">I'm a large modal</x-slot>
            <x-slot name="body">
                Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#optional-sizes">modal sizes</a> using size="lg".
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>

<x-modal.toggle id="SizeExample-3" class="btn btn-secondary mb-3">Open extra large modal</x-modal.toggle>
<x-modal id="SizeExample-3" size="xl">
    <x-modal.dialog>
        <x-modal.content>
            <x-slot name="header">I'm a extra large modal</x-slot>
            <x-slot name="body">
                Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#optional-sizes">modal sizes</a> using size="xl".
            </x-slot>
        </x-modal.content>
    </x-modal.dialog>
</x-modal>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Fullscreen example">
        <x-slot name="description">
            Another override is the option to pop up a modal that covers the user viewport, available via prop <code>fullscreen="true|sm|md|lg|xl|xxl"</code>.
            When you set the prop as boolean true, for example <code>:fullscreen="true"</code>, then the modal is always fullscreen.
            Otherwise it use the defined breakpoints of bootstrap. See below in action.
        </x-slot>
        @foreach(['true' => 'always fullscreen', 'sm' => 'sm down fullscreen', 'md' => 'md down fullscreen', 'lg' => 'lg down fullscreen', 'xl' => 'xl down fullscreen', 'xxl' => 'xxl down fullscreen'] as $fullscreen => $name)
            <x-modal.toggle id="FullScreenExample-{{ $fullscreen }}" class="btn btn-danger mb-3">Open {{ $name }} modal</x-modal.toggle>
            <x-modal id="FullScreenExample-{{ $fullscreen }}" :fullscreen="$fullscreen === 'true' ? true : $fullscreen">
                <x-modal.dialog>
                    <x-modal.content>
                        <x-slot name="header">I'm a {{ $name }} modal</x-slot>
                        <x-slot name="body">
                            Set a <a href="https://getbootstrap.com/docs/5.1/components/modal/#fullscreen-modal">modal fullscreen</a> using :fullscreen="{{ $fullscreen }}".
                            <br>
                            Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a .modal-dialog.
                        </x-slot>
                        <x-slot name="footer"></x-slot>
                    </x-modal.content>
                </x-modal.dialog>
            </x-modal>
        @endforeach

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="FullScreenExample-1" class="btn btn-danger mb-3">Open always fullscreen modal</x-modal.toggle>
<x-modal id="FullScreenExample-1" fullscreen>
    <!-- Modal content -->
</x-modal>

<x-modal.toggle id="FullScreenExample-2" class="btn btn-danger mb-3">Open sm down fullscreen modal</x-modal.toggle>
<x-modal id="FullScreenExample-2" fullscreen="sm">
    <!-- Modal content -->
</x-modal>

<x-modal.toggle id="FullScreenExample-3" class="btn btn-danger mb-3">Open md down fullscreen modal</x-modal.toggle>
<x-modal id="FullScreenExample-3" fullscreen="md">
    <!-- Modal content -->
</x-modal>

<x-modal.toggle id="FullScreenExample-4" class="btn btn-danger mb-3">Open lg down fullscreen modal</x-modal.toggle>
<x-modal id="FullScreenExample-4" fullscreen="lg">
    <!-- Modal content -->
</x-modal>

<x-modal.toggle id="FullScreenExample-5" class="btn btn-danger mb-3">Open xl down fullscreen modal</x-modal.toggle>
<x-modal id="FullScreenExample-5" fullscreen="xl">
    <!-- Modal content -->
</x-modal>

<x-modal.toggle id="FullScreenExample-6" class="btn btn-danger mb-3">Open xxl down fullscreen modal</x-modal.toggle>
<x-modal id="FullScreenExample-6" fullscreen="xxl">
    <!-- Modal content -->
</x-modal>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Modal with form example">
        <x-slot name="description">
            If you need to show a form inside a modal, you can do so by using component <code>x-modal.form</code>.
            Find below an example with login form.
            You can pass prop <code>action</code> and other forms props directly in the parent component.
            Find more info about form components <a href="/docs/components/form">here</a>.
        </x-slot>
        <x-modal.toggle id="FormExample" class="btn btn-success mb-3">Open modal with form</x-modal.toggle>
        <x-modal.form id="FormExample" action="/login" title="My modal with a form" centered>
            <x-form.group name="email" :error="$errors->first('email')">
                <x-form.label :value="__('E-Mail Address')" for="email" class="visually-hidden"/>
                <x-form.input type="text"
                              name="email"
                              :placeholder="__('E-Mail Address')"
                              autocomplete="email"
                              :has-error="$errors->has('email')"
                              size="lg"
                              maxlength="255" required
                              autofocus/>
            </x-form.group>

            <x-form.group name="password">
                <x-form.label :value="__('Password')" for="password" class="visually-hidden"/>
                <x-form.input type="password"
                              name="password"
                              :placeholder="__('Password')"
                              autocomplete="current-password"
                              maxlength="30"
                              minlength="8"
                              size="lg"
                              required/>
            </x-form.group>
        </x-modal.form>

        <x-slot name="code">
            @verbatim
<x-modal.toggle id="FormExample" class="btn btn-success mb-3">Open modal with form</x-modal.toggle>
<x-modal.form id="FormExample" action="/login" title="My modal with a form" centered>
    <x-form.group name="email" :error="$errors->first('email')">
        <x-form.label :value="__('E-Mail Address')" for="email" class="visually-hidden"/>
        <x-form.input type="text"
                      name="email"
                      :placeholder="__('E-Mail Address')"
                      autocomplete="email"
                      :has-error="$errors->has('email')"
                      size="lg"
                      maxlength="255" required
                      autofocus/>
    </x-form.group>

    <x-form.group name="password">
        <x-form.label :value="__('Password')" for="password" class="visually-hidden"/>
        <x-form.input type="password"
                      name="password"
                      :placeholder="__('Password')"
                      autocomplete="current-password"
                      maxlength="30"
                      minlength="8"
                      size="lg"
                      required/>
    </x-form.group>
</x-modal.form>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

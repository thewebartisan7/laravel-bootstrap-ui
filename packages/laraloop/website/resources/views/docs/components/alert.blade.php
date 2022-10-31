@extends('website::layouts.doc', ['title' => 'Alert'])

@section('content')
  <p class="lead mb-5">
    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
    messages.
  </p>

  <h4>How it works</h4>
  <p>
    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
    messages.
  </p>

  <x-doc.demo title="Basic example"
              description="Alerts are available for any length of text, as well as an optional close button.">
    <x-alert message="A very basic alert!"/>
    <x-alert title="Alert with title" message="I have a prop for title."/>

    <x-slot name="code">
      @verbatim
<x-alert message="A very basic alert!"/>
<x-alert title="Alert with title" message="I have a prop for title."/>
      @endverbatim
    </x-slot>
  </x-doc.demo>


  <x-doc.demo title="Colored example"
              description="For proper styling, use one of the eight required contextual classes (e.g., .alert-success).">
    @foreach(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
      <x-alert :type="$type">
        A simple {{ $type }} alert with prop <code>type="{{ $type }}"</code> - check it out!
      </x-alert>
    @endforeach

    <x-slot name="code">
      @verbatim
<x-alert type="primary">A simple primary alert - check it out!</x-alert>
<x-alert type="secondary">A simple secondary alert - check it out!</x-alert>
<x-alert type="success">A simple success alert - check it out!</x-alert>
<x-alert type="danger">A simple danger alert - check it out!</x-alert>
<x-alert type="warning">A simple warning alert - check it out!</x-alert>
<x-alert type="info">A simple info alert - check it out!</x-alert>
<x-alert type="light">A simple light alert - check it out!</x-alert>
<x-alert type="dark">A simple dark alert - check it out!</x-alert>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="With title and close icon"
              description="Alert component has prop title and dismissible for close icon.">
    <x-alert title="Well done!">
      Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so
      that you can see how spacing within an alert works with this kind of content.
      <hr>
      Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
    </x-alert>
    <x-alert message="Alert for inline dismissal" dismissible/>

    <x-slot name="code">
      @verbatim
<x-alert title="Well done!">
  Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer
  so that you can see how spacing within an alert works with this kind of content.
  <hr>
  Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
</x-alert>

<x-alert message="Alert for inline dismissal" dismissible/>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Icon example">
    <x-slot name="description">
      Use prop <code>icon="icon-name"</code> to add supported icon to the alert.
      By just adding prop <code>icon</code> will be shown a default icon for
      alert with prop <code>type="info|success|warning|danger"</code>.
    </x-slot>

    <x-alert message="Alert type info has this icon by default." type="info" icon/>
    <x-alert message="Alert type success has this icon by default." type="success" icon/>
    <x-alert message="Alert type warning has this icon by default." type="warning" icon/>
    <x-alert message="Alert type danger has this icon by default." type="danger" icon/>
    <x-alert type="info" icon="heart-fill">
      Override default icon for alert info via prop <code>icon="heart-fill"</code>
    </x-alert>
    <x-alert type="warning">
      Disable default icon for alert warning by not adding prop <code>icon</code>
    </x-alert>

    <x-slot name="code">
      @verbatim
<x-alert message="Alert type info has this icon by default." type="info" icon/>
<x-alert message="Alert type success has this icon by default." type="success" icon/>
<x-alert message="Alert type warning has this icon by default." type="warning" icon/>
<x-alert message="Alert type danger has this icon by default." type="error" icon/>
<x-alert type="info" icon="heart-fill">
  Override default icon for alert info via prop <code>icon="heart-fill"</code>
</x-alert>
<x-alert type="warning">
  Disable default icon for alert warning via prop <code>:icon="false"</code>
</x-alert>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-alert class="mt-3" icon="info-circle-fill">
    When you use alert with title and icon combined, then icon will not be display.
    If you really need such case, you can use custom markup via main slot.
    Find below an example.
  </x-alert>

  <x-doc.code>
    @verbatim
<x-alert>
  <div class="d-flex align-items-center mb-2">
    <x-icon name="heart-fill" class="flex-shrink-0 me-2" width="28" height="28"/>
    <h4 class="alert-heading mb-0">Alert with title and icon</h4>
  </div>
  Alert with title and icon.
</x-alert>

<x-alert>
  <h4 class="alert-heading">Alert with title and icon</h4>
  <div class="d-flex align-items-center">
    <x-icon name="heart-fill" class="flex-shrink-0 me-2" width="24" height="24"/>
    <p class="mb-0">
      Alert with title and icon.
    </p>
  </div>
</x-alert>
    @endverbatim
  </x-doc.code>

  <x-doc.demo title="Session example"
              description="Display your message coming from session become easier with alert component.">
    <x-alert.flash type="success" dismissible/>

    <x-alert.flash type="error" dismissible>
      <ul class="list-unstyled mb-0">
        @foreach($component->messages() as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    </x-alert.flash>

    <x-slot name="code">
      @verbatim
<x-alert.flash type="success" dismissible/>

<x-alert.flash type="error" dismissible>
  <ul class="list-unstyled mb-0">
    @foreach($component->messages() as $message)
      <li>{{ $message }}</li>
    @endforeach
  </ul>
</x-alert.flash>
      @endverbatim
    </x-slot>
  </x-doc.demo>

@endsection

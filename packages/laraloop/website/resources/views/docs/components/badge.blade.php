@extends('website::layouts.doc', ['title' => 'Badge'])

@section('content')
  <p class="lead mb-5">
    Documentation and examples for badges, the small count and labeling component.
  </p>

  <h4>How it works</h4>
  <p>
    Badges scale to match the size of the immediate parent element by using relative font sizing and em units.
    You can set content via slot or prop <code>title</code>.
    Set style via prop <code>color</code> and position them using prop
    <code>top="0|50|100"</code>, <code>bottom="0|50|100"</code>, <code>start="0|50|100"</code> and <code>end="0|50|100"</code>.
  </p>

  <x-doc.demo title="Basic example" description="Find below a basic example.">
    <x-badge title="Default" />
    <x-badge pill>Pill</x-badge>
    <x-badge circle>1</x-badge>

    <x-slot name="code">
      @verbatim
<x-badge title="Default" />
<x-badge pill>Pill</x-badge>
<x-badge circle>1</x-badge>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Colored example" description="Use the border spinners for a lightweight loading indicator.">
    @foreach(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $color)
      <x-badge :color="$color">{{ $color }}</x-badge>
    @endforeach

    <x-slot name="code">
      @verbatim
<x-badge color="primary">primary</x-badge>
<x-badge color="secondary">secondary</x-badge>
<x-badge color="success">success</x-badge>
<x-badge color="danger">danger</x-badge>
<x-badge color="warning">warning</x-badge>
<x-badge color="info">info</x-badge>
<x-badge color="light">light</x-badge>
<x-badge color="dark">dark</x-badge>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Positioned example">
    <x-slot name="description">
      Badge component use <a href="https://getbootstrap.com/docs/5.1/utilities/position/" target="_blank">position
        utilities</a> to position it in the corner of a link or button.
      Use the prop <code>top="0|50|100"</code>, <code>bottom="0|50|100"</code>, <code>start="0|50|100"</code> and <code>end="0|50|100"</code>.
      You can also add more class with a few more utilities without a count for a more generic indicator.
    </x-slot>

    <x-button color="primary" class="m-4 position-relative">
      Top right pill
      <x-badge top="0" start="100" color="danger" pill>
        99+<span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Top left circle
      <x-badge top="0" start="0" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Top center circle
      <x-badge top="0" start="50" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Top right circle
      <x-badge top="0" start="100" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Center right circle
      <x-badge top="50" start="100" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Bottom right circle
      <x-badge top="100" start="100" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Bottom center circle
      <x-badge top="100" start="50" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Bottom right circle
      <x-badge top="100" start="0" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-button color="primary" class="m-4 position-relative">
      Center right circle
      <x-badge top="50" start="0" color="danger" class="border border-light p-2" circle>
        <span class="visually-hidden">unread messages</span>
      </x-badge>
    </x-button>

    <x-slot name="code">
      @verbatim
<x-button color="primary" class="m-4 position-relative">
  Top right pill
  <x-badge top="0" start="100" color="danger" pill>
    99+<span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Top left circle
  <x-badge top="0" start="0" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Top center circle
  <x-badge top="0" start="50" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Top right circle
  <x-badge top="0" start="100" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Center right circle
  <x-badge top="50" start="100" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Bottom right circle
  <x-badge top="100" start="100" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Bottom center circle
  <x-badge top="100" start="50" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Bottom right circle
  <x-badge top="100" start="0" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>

<x-button color="primary" class="m-4 position-relative">
  Center right circle
  <x-badge top="50" start="0" color="danger" class="border border-light p-2" circle>
    <span class="visually-hidden">unread messages</span>
  </x-badge>
</x-button>
      @endverbatim
    </x-slot>
  </x-doc.demo>
@endsection

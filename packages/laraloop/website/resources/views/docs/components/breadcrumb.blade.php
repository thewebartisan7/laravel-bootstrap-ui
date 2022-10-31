@extends('website::layouts.doc', ['title' => 'Breadcrumb'])

@section('content')
  <p class="lead mb-5">
    Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.
  </p>

  <h4>How it works</h4>
  <p>
    Use an ordered or unordered list with linked list items to create a minimally styled breadcrumb. Use the utilities to add additional styles as desired.
  </p>

  <x-doc.demo title="Using link component">
    <x-slot name="description">
      You can use prop <code>to</code> and the <code>x-link</code> will be used which detect the current link and set active status.
    </x-slot>

    <x-breadcrumb>
      <x-breadcrumb.item to="/docs" label="Home"/>
      <x-breadcrumb.item to="/docs/components/introduction" label="Components"/>
      <x-breadcrumb.item to="/docs/components/breadcrumb" label="Breadrumb"/>
    </x-breadcrumb>

    <x-slot name="code">
      @verbatim
<x-breadcrumb>
  <x-breadcrumb.item to="/docs" label="Home"/>
  <x-breadcrumb.item to="/docs/components/introduction" label="Components"/>
  <x-breadcrumb.item to="/docs/components/breadcrumb" label="Breadrumb"/>
</x-breadcrumb>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Using normal link">
    <x-slot name="description">
      You can use prop <code>href</code> for create link without <code>x-link</code> component.
      In this case you have to pass the prop <code>active</code> for set active link.
    </x-slot>

    <x-breadcrumb>
      <x-breadcrumb.item href="/docs" label="Home"/>
      <x-breadcrumb.item href="/docs/components/introduction" label="Components"/>
      <x-breadcrumb.item href="/docs/components/breadcrumb" label="Breadrumb" active/>
    </x-breadcrumb>

    <x-slot name="code">
      @verbatim
        <x-breadcrumb>
          <x-breadcrumb.item href="/docs" label="Home"/>
          <x-breadcrumb.item href="/docs/components/introduction" label="Components"/>
          <x-breadcrumb.item href="/docs/components/breadcrumb" label="Breadrumb" active/>
        </x-breadcrumb>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Without any link">
    <x-slot name="description">
      You can also pass without props <code>to</code> and <code>href</code>, in this case
      the <code>x-breadcrumb.item</code> will not use any link, or you can pass anything you want
      with main slot.
    </x-slot>

    <x-breadcrumb>
      <x-breadcrumb.item href="/docs" label="Home"/>
      <x-breadcrumb.item href="/docs/components/introduction" label="Components"/>
      <x-breadcrumb.item label="Breadrumb" active/>
    </x-breadcrumb>

    <x-slot name="code">
      @verbatim
<x-breadcrumb>
  <x-breadcrumb.item href="/docs" label="Home"/>
  <x-breadcrumb.item href="/docs/components/introduction" label="Components"/>
  <x-breadcrumb.item label="Breadrumb" active/>
</x-breadcrumb>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Set custom divider and aria-label">
    <x-slot name="description">
      You can use prop <code>divider</code> to set a custom divider and <code>label</code> to set <code>aria-label</code>.
    </x-slot>

    <x-breadcrumb label="My Breadcrumb" divider=">">
      <x-breadcrumb.item href="/docs" label="Home"/>
      <x-breadcrumb.item href="/docs/components/introduction" label="Components"/>
      <x-breadcrumb.item label="Breadrumb" active/>
    </x-breadcrumb>

    <x-slot name="code">
      @verbatim
<x-breadcrumb label="My Breadcrumb" divider=">">
  <!-- Breadcrumb content go here... -->
</x-breadcrumb>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <h4 class="mt-5">Important notes regarding active status</h4>

  <x-alert class="mt-3">
    Bootstrap set the active link to <code>.breadcrumb-item</code> and not the link.
    So the <code>x-link</code> component that add active class to itself would not be styled.
    I have made a <a href="https://github.com/twbs/bootstrap/pull/35804" target="_blank">PR</a>
    which style also the link with active class, and is now part of Bootstrap core.
    In case your Bootstrap version doesn't include this addition, you can either set <code>active</code> prop
    yourself to the link or add below SCSS code:
  </x-alert>

  <x-doc.code language="scss">
    @verbatim
.breadcrumb-item {
  > .active {
    color: $breadcrumb-active-color;
  }

  > .active {
    text-decoration: none;
    cursor: default;
    pointer-events: none;
  }
}
    @endverbatim
  </x-doc.code>

  <p>
    You should find also this code commented in file <code>resources/scss/bootstrap/_breadcrumb.scss</code>.
  </p>
@endsection

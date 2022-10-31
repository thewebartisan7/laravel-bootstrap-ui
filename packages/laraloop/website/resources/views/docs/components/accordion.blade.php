@extends('website::layouts.doc', ['title' => 'Accordion'])

@section('content')
    <p class="lead mb-5">
        Build vertically collapsing accordions in combination with Bootstrap Collapse JavaScript plugin.
    </p>

    <h4>How it works</h4>
    <p>
        The accordion uses <a href="/docs/components/collapse">collapse</a> internally to make it collapsible.
        To render an accordion that's expanded, add the <code>show</code> prop on the <code>x-accordion.item</code> component.
    </p>

    <x-doc.demo title="Basic example">
        <x-slot name="description">
          Click the accordions below to expand/collapse the accordion content.
          As you may notice the <code>id</code> it's not mandatory for <code>x-accordion</code> component since it's generated in component class when missed.
          In case you set the <code>id</code> that one will be used instead of generated one.
          The prop <code>item</code> on <code>x-accordion.item</code> component should be unique
          since will be used for set required <code>id</code> to accordion header and collapse button.
          In the generated HTML output you will notice the value of prop <code>id</code> used to set
          <code>id="heading-generated-id"</code> and <code>id="collapse-generated-id"</code>.
          Like for <code>id</code> of <code>x-accordion</code>, the prop <code>id</code> of <code>x-accordion.item</code> it's not mandatory,
          in case is missing it will be generated in component class.
          Confused? You don't need. Just remember that you don't need to set any IDs.
        </x-slot>

        <x-accordion>
            <x-accordion.item title="First accordion" show>
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>

            <x-accordion.item title="Second accordion">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>

            <x-accordion.item title="Third accordion">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>
        </x-accordion>

        <x-slot name="code">
            @verbatim
<x-accordion>
  <x-accordion.item title="First accordion" show>
    <!-- Content go here -->
  </x-accordion.item>

  <x-accordion.item title="Second accordion">
    <!-- Content go here -->
  </x-accordion.item>

  <x-accordion.item title="Third accordion">
    <!-- Content go here -->
  </x-accordion.item>
</x-accordion>

<!-- Optionally you can set your custom IDs -->

<x-accordion id="myAccordion">
  <x-accordion.item id="myFirstItem" title="First accordion" show>
    <!-- Content go here -->
  </x-accordion.item>

  <x-accordion.item id="mySecondItem" title="Second accordion">
    <!-- Content go here -->
  </x-accordion.item>

  <x-accordion.item id="myThirdItem" title="Third accordion">
    <!-- Content go here -->
  </x-accordion.item>
</x-accordion>
            @endverbatim

        </x-slot>
    </x-doc.demo>

    <x-alert class="mt-3">

    </x-alert>

    <x-doc.demo title="Flush and always open">
        <x-slot name="description">
            Add prop <code>flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.
            And add prop <code>always-open</code> to make accordion items stay open when another item is opened.
        </x-slot>

        <x-accordion id="FlushAndAlwaysOpen" flush always-open>
            <x-accordion.item item="first2" title="First accordion" show>
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>

            <x-accordion.item item="second2" title="Second accordion">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>

            <x-accordion.item item="third2" title="Third accordion">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>
        </x-accordion>

        <x-slot name="code">
            @verbatim
<x-accordion id="FlushAndAlwaysOpen" flush always-open>
    <!-- Content go here -->
</x-accordion>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

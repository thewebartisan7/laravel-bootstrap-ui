@extends('website::layouts.doc', ['title' => 'Collapse'])

@section('content')
  <h4>How it works</h4>
  <p>
    Toggle the visibility of content across your project with a few classes and Bootstrap JavaScript plugins.
  </p>

  <x-doc.demo title="Basic example">
    <x-slot name="description">
      The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are
      mapped to specific elements you toggle.
      Instead, use the class as an independent wrapping element.
    </x-slot>

    <x-collapse button="Collapse with button">
      <x-slot name="content">
        <div class="p-3 border rounded mt-3">
          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
          user activates the relevant trigger.
        </div>
      </x-slot>
    </x-collapse>

    <hr>

    <x-collapse link="Collapse with link">
      <x-slot name="content" class="card card-body mt-3">
        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
        user activates the relevant trigger.
      </x-slot>
    </x-collapse>

    <hr>

    <x-collapse button="Using component x-collapse.content">
      <x-collapse.content class="card card-body mt-3">
        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
        user activates the relevant trigger.
      </x-collapse.content>
    </x-collapse>

    <hr>

    <x-button color="danger"
              large
              toggle="collapse"
              data-bs-target="#requiredToSetId"
              aria-expanded="false"
              aria-controls="requiredToSetId">With custom button</x-button>
    <x-collapse.content id="requiredToSetId" class="card card-body mt-3">
      Creating collapse do it yourself!
    </x-collapse.content>

    <x-slot name="code">
      @verbatim
<x-collapse button="Collapse with button">
  <x-slot name="content">
    <div class="p-3 border rounded mt-3">
      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
      user activates the relevant trigger.
    </div>
  </x-slot>
</x-collapse>

<x-collapse link="Collapse with link">
  <x-slot name="content" class="card card-body mt-3">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
    user activates the relevant trigger.
  </x-slot>
</x-collapse>

<x-collapse button="Using component x-collapse.content">
  <x-collapse.content class="card card-body mt-3">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
    user activates the relevant trigger.
  </x-collapse.content>
</x-collapse>

<x-button color="danger"
          large
          toggle="collapse"
          data-bs-target="#requiredToSetId"
          aria-expanded="false"
          aria-controls="requiredToSetId">With custom button</x-button>
<x-collapse.content id="requiredToSetId" class="card card-body mt-3">
  Creating collapse do it yourself!
</x-collapse.content>

      @endverbatim
    </x-slot>
  </x-doc.demo>
@endsection

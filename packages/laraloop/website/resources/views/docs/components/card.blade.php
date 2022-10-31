@extends('website::layouts.doc', ['title' => 'Card'])

@section('content')
  <p class="lead mb-5">
    Bootstrap's cards provide a flexible and extensible content container with multiple variants and options.
  </p>

  <h4>How it works</h4>

  <p>
    A card is a flexible and extensible content container. It includes slots or components for header, body and footer.
  </p>

  <x-doc.demo title="With slots example">
    <x-slot name="description">
      The <code>x-card</code> component has three slots: <code>header</code>, <code>body</code> and <code>footer</code>.
      Find below a basic example which show also how to pass props to each slot.
    </x-slot>

    <x-card>
      <x-slot name="header">Card header</x-slot>
      <x-slot name="body">
        Some quick example text to build on the card title and make up the bulk of
        the card's content
      </x-slot>
      <x-slot name="footer">Card footer</x-slot>
    </x-card>

    <hr class="invisible">

    <x-card>
      <x-slot name="header" class="fw-bold">Card header with class <code>.fw-bold</code></x-slot>
      <x-slot name="body" class="bg-light">
        Card body with class <code>.bg-light</code>.
      </x-slot>
      <x-slot name="footer" class="bg-white">Card footer with class <code>.bg-white</code></x-slot>
    </x-card>

    <x-slot name="code">
      @verbatim
<x-card>
  <x-slot name="header">Card header</x-slot>
  <x-slot name="body">
    Some quick example text to build on the card title and make up the bulk of
    the card's content
  </x-slot>
  <x-slot name="footer">Card footer</x-slot>
</x-card>

<!-- With props passed to slots -->

<x-card>
  <x-slot name="header" class="fw-bold">Card header with class <code>.fw-bold</code></x-slot>
  <x-slot name="body" class="bg-light">
    Card body with class <code>.bg-light</code>.
  </x-slot>
  <x-slot name="footer" class="bg-white">Card footer with class <code>.bg-white</code></x-slot>
</x-card>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="With components example">
    <x-slot name="description">
      Sometimes you need more flexibility in your card content, or simple you prefer
      to use a different syntax (I am one of this).
      In this case you can use the components <code>x-card.header</code>, <code>x-card.body</code> and
      <code>x-card.footer</code>.
      If you are not using this components, you can disable them via config as explained <a href="http://laraloop3.test/docs/installation">here</a>.
    </x-slot>

    <x-card>
      <x-card.header class="fw-bold">Card header</x-card.header>
      <x-card.body>
        Some quick example text to build on the card title and make up the bulk of the card's content.
      </x-card.body>
      <x-card.footer class="bg-white">Card footer</x-card.footer>
    </x-card>

    <x-slot name="code">
      @verbatim
<x-card>
  <x-card.header class="fw-bold">Card header</x-card.header>
  <x-card.body>
    Some quick example text to build on the card title and make up the bulk of the card's content.
  </x-card.body>
  <x-card.footer class="bg-white">Card footer</x-card.footer>
</x-card>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Using main slot example">
    <x-slot name="description">
      If you need to add some content outside card body then you can add such content as direct child of
      <code>x-card</code> component like below example.
    </x-slot>

    <x-card class="w-50">
      <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
      <x-slot name="body">Card body content</x-slot>
    </x-card>

    <x-slot name="code">
      @verbatim
<x-card class="w-50">
  <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
  <x-slot name="body">Card body content</x-slot>
</x-card>
      @endverbatim
    </x-slot>
  </x-doc.demo>

  <x-doc.demo title="Card group example">
    <x-slot name="description">
      Use <code>x-card.group</code> component to render cards as a single, attached element with equal width and height columns.
    </x-slot>

    <x-card.group>
      <x-card>
        <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
        <x-slot name="body">
          This is my card body
        </x-slot>
      </x-card>
      <x-card>
        <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
        <x-slot name="body">
          This is my card body
        </x-slot>
      </x-card>
      <x-card>
        <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
        <x-slot name="body">
          This is my card body
        </x-slot>
      </x-card>
    </x-card.group>

    <x-slot name="code">
      @verbatim
<x-card.group>
  <x-card>
    <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
    <x-slot name="body">
      This is my card body
    </x-slot>
  </x-card>
  <x-card>
    <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
    <x-slot name="body">
      This is my card body
    </x-slot>
  </x-card>
  <x-card>
    <img src="https://picsum.photos/id/0/600/250" class="card-img-top">
    <x-slot name="body">
      This is my card body
    </x-slot>
  </x-card>
</x-card.group>
      @endverbatim
    </x-slot>
  </x-doc.demo>
@endsection

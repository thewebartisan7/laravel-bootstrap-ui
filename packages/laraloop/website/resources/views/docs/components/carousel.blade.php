@extends('website::layouts.doc', ['title' => 'Carousel'])

@section('content')
    <h4>How it works</h4>
    <p>
        A slideshow component for cycling through elements—images or slides of text—like a carousel.
        The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript.
        It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.
    </p>

    <x-doc.demo title="Basic example">
        <x-slot name="description">
            Here's a basic carousel with slides only. The images has by default the class .d-block and .w-100 on carousel images to prevent browser default image alignment.
        </x-slot>

        <x-carousel id="BasicExample">
            <x-carousel.item src="https://picsum.photos/id/0/600/250" active/>
            <x-carousel.item src="https://picsum.photos/id/1/600/250"/>
            <x-carousel.item src="https://picsum.photos/id/2/600/250"/>
        </x-carousel>

        <x-slot name="code">
            @verbatim
<x-carousel id="BasicExample">
    <x-carousel.item src="https://picsum.photos/id/0/600/250" active/>
    <x-carousel.item src="https://picsum.photos/id/1/600/250"/>
    <x-carousel.item src="https://picsum.photos/id/2/600/250"/>
</x-carousel>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Example with props">
        <x-slot name="description">
            Here's a the complete carousel example by using props <code>indicators="3"</code>, <code>interval="5000"</code>, <code>controls</code>, <code>crossfade</code> and <code>dark</code>.
        </x-slot>

        <x-carousel id="PropsExample" indicators="3" interval="5000" controls crossfade dark>
            <x-carousel.item src="https://picsum.photos/id/10/600/250" active/>
            <x-carousel.item src="https://picsum.photos/id/100/600/250"/>
            <x-carousel.item src="https://picsum.photos/id/1000/600/250"/>
        </x-carousel>

        <x-slot name="code">
            @verbatim
<x-carousel id="PropsExample" indicators="3" interval="5000" controls crossfade dark>
  <x-carousel.item src="https://picsum.photos/id/10/600/250" active/>
  <x-carousel.item src="https://picsum.photos/id/100/600/250"/>
  <x-carousel.item src="https://picsum.photos/id/1000/600/250"/>
</x-carousel>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Disable touch swiping">
        <x-slot name="description">
            Carousels support swiping left/right on touchscreen devices to move between slides. This can be disabled using the prop <code>:touch="false"</code>.
            The example below also does not include the data-bs-ride attribute because has <code>:interval="false"</code> so it doesn't autoplay.
        </x-slot>

        <x-carousel id="DisableTouchExample" :touch="false" :interval="false" controls>
            <x-carousel.item src="https://picsum.photos/id/0/600/250" active/>
            <x-carousel.item src="https://picsum.photos/id/1/600/250"/>
            <x-carousel.item src="https://picsum.photos/id/2/600/250"/>
        </x-carousel>

        <x-slot name="code">
            @verbatim
<x-carousel id="DisableTouchExample" :touch="false" :interval="false" controls>
    <x-carousel.item src="https://picsum.photos/id/0/600/250" active/>
    <x-carousel.item src="https://picsum.photos/id/1/600/250"/>
    <x-carousel.item src="https://picsum.photos/id/2/600/250"/>
</x-carousel>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Caption example">
        <x-slot name="description">
            It's easy to add caption to your carousel.
            By default caption are only visible from <code>md</code> breakpoint.
            If you need to change this then use slots as shown below.
        </x-slot>

        <x-carousel id="CaptionExample" :touch="false" :interval="false" controls>
            <x-carousel.item src="https://picsum.photos/id/1022/600/250" active>
                <x-slot name="caption" class="d-none d-md-block">
                    <h4>My first slide caption via slot</h4>
                    <p>This caption is set via slot "caption".</p>
                </x-slot>
            </x-carousel.item>
            <x-carousel.item src="https://picsum.photos/id/1022/600/250">
                <x-slot name="caption" class="d-none d-md-block">
                    <h4>Another caption via slot</h4>
                    <p>This is caption set via slot "caption".</p>
                </x-slot>
            </x-carousel.item>
            <x-carousel.item src="https://picsum.photos/id/122/600/250" caption="My simple caption via prop"/>
        </x-carousel>

        <x-slot name="code">
            @verbatim
<x-carousel id="CaptionExample" :touch="false" :interval="false" controls>
    <x-carousel.item src="https://picsum.photos/id/1022/600/250" active>
        <x-slot name="caption" class="d-none d-md-block">
            <h4>My first slide caption via slot</h4>
            <p>This caption is set via slot "caption".</p>
        </x-slot>
    </x-carousel.item>
    <x-carousel.item src="https://picsum.photos/id/1022/600/250">
        <x-slot name="caption" class="d-none d-md-block">
            <h4>Another caption via slot</h4>
            <p>This is caption set via slot "caption".</p>
        </x-slot>
    </x-carousel.item>
    <x-carousel.item src="https://picsum.photos/id/122/600/250" caption="My simple caption via prop"/>
</x-carousel>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Using slots example">
        <x-slot name="description">
            If you need more customization of content you can use add content directly in <code>x-carousel.item</code> content.
        </x-slot>

        <x-carousel id="SlotExample">
            <x-carousel.item active>
                <img src="https://picsum.photos/id/0/600/250" class="d-block w-100" alt="My awesome image">
            </x-carousel.item>
            <x-carousel.item>
                <img src="https://picsum.photos/id/1/600/250" class="d-block w-100" alt="My awesome image">
            </x-carousel.item>
            <x-carousel.item>
                <img src="https://picsum.photos/id/2/600/250" class="d-block w-100" alt="My awesome image">
            </x-carousel.item>
        </x-carousel>

        <x-slot name="code">
            @verbatim
<x-carousel id="SlotExample">
    <x-carousel.item active>
        <img src="https://picsum.photos/id/0/600/250" class="d-block w-100" alt="My awesome image">
    </x-carousel.item>
    <x-carousel.item>
        <img src="https://picsum.photos/id/1/600/250" class="d-block w-100" alt="My awesome image">
    </x-carousel.item>
    <x-carousel.item>
        <img src="https://picsum.photos/id/2/600/250" class="d-block w-100" alt="My awesome image">
    </x-carousel.item>
</x-carousel>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

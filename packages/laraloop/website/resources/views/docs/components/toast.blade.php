@extends('website::layouts.doc', ['title' => 'Toast'])

@section('content')
    <h4>How it works</h4>
    <p>
        Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.
        A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.
    </p>

    <x-doc.demo title="Basic example" class="bg-light">
        <x-toast class="fade show">
            <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
        </x-toast>

        <x-toast class="fade show mt-4" title="A basic example">
            <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
        </x-toast>

        <x-toast class="fade show mt-4" title="Custom icon example" icon="question-circle-fill">
            <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
        </x-toast>

        <x-toast class="fade show mt-4" title="With subtitle" icon="app-indicator" subtitle="7 mins ago">
            <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
        </x-toast>

        <x-toast class="fade show mt-4" title="Without icon" :icon="false" subtitle="7 mins ago">
            <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
        </x-toast>

        <x-slot name="code">
            @verbatim
<x-toast class="fade show">
    <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
</x-toast>

<x-toast class="fade show mt-4" title="A basic example">
    <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
</x-toast>

<x-toast class="fade show mt-4" title="Custom icon example" icon="question-circle-fill">
    <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
</x-toast>

<x-toast class="fade show mt-4" title="With subtitle" icon="app-indicator" subtitle="7 mins ago">
    <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
</x-toast>

<x-toast class="fade show mt-4" title="Without icon" :icon="false" subtitle="7 mins ago">
    <x-toast.body>Hello, world! This is a toast message.</x-toast.body>
</x-toast>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Using slot example" class="bg-light">
        {{-- NOTE: We are setting prop title to empty for override the title of parent component x-doc.demo --}}
        <x-toast class="fade show" title="">
            <x-slot name="header">
                <x-icon name="heart-fill" class="me-2 text-danger"/>
                <strong class="me-auto">I love toast</strong>
                <small>11 mins ago</small>
            </x-slot>

            <x-slot name="body">
                Hello, world! This is a toast message.
            </x-slot>
        </x-toast>

        <x-slot name="code">
            @verbatim
<x-toast class="fade show">
    <x-slot name="header">
        <x-icon name="heart-fill" class="me-2 text-danger"/>
        <strong class="me-auto">I love toast</strong>
        <small>11 mins ago</small>
    </x-slot>

    <x-slot name="body">
        Hello, world! This is a toast message.
    </x-slot>
</x-toast>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Using component example" class="bg-light">
        <x-toast class="fade show" title="">
            <x-toast.header>
                <x-icon name="alarm" class="me-2 text-warning"/>
                <strong class="me-auto">Toast header component</strong>
                <small>11 mins ago</small>
            </x-toast.header>

            <x-toast.body>
                Hello, world! This is a toast message.
            </x-toast.body>
        </x-toast>

        <x-slot name="code">
            @verbatim
<x-toast class="fade show">
    <x-toast.header>
        <x-icon name="alarm" class="me-2 text-warning"/>
        <strong class="me-auto">Toast header component</strong>
        <small>11 mins ago</small>
    </x-toast.header>

    <x-toast.body>
        Hello, world! This is a toast message.
    </x-toast.body>
</x-toast>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection

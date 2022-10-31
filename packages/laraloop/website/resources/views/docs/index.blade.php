@extends('website::layouts.doc', ['title' => 'Introduction'])

@section('content')
    <p>
        Laraloop UI is a set of Blade components to utilise in your Laravel application.
        It's built on top of Bootstrap framework, and it's completely open-source.
        You can find all Bootstrap framework components and more.
    </p>

    <p>
        It's made for Blade, the Laravel's powerful templating engine.
        Every Laraloop UI component is a Blade component with a view and/or a class.
        Each component can be extended, modified and overwritten.
    </p>

    <p>
        The components are designed to render Bootstrap components out-of-the-box, meaning
        you just write Blade components syntax by passing some props and Laraloop do
        the hard work of converting them to a fully working HTML markup for Boostrap.
    </p>

    <p>
        To give you a practical introduction example,
        let's look at the way how a few Bootstrap component can be rendered.
    </p>

    <x-doc.code>
        @verbatim
<x-alert type="danger" message="Hi, there! I'm an alert type danger component." />
        @endverbatim
    </x-doc.code>

    <p>
        The result of this is:
    </p>

    <x-alert type="danger" message="Hi, there! I'm an alert type danger component." />
@endsection

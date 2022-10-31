@extends('website::layouts.doc', ['title' => 'Installation'])

@section('content')
    <h4 class="mb-4">Requirements</h4>

    <ul>
        <li>PHP 7.3 or higher</li>
        <li>Laravel 8.64 or higher</li>
        <li>Bootstrap 5.1.3 or higher</li>
    </ul>

    <x-alert type="info">
        Because Laraloop UI take advantage of powerful <code>@verbatim @aware @endverbatim</code> blade directive, which is available
        only from Laravel 8.64, we don't support any lower Laravel version.
    </x-alert>

    <h4 class="mb-4">Quick installation</h4>

    <x-doc.code language="bash">
composer require laraloop/ui
php artisan ui:install
npm install
npm run dev
    </x-doc.code>


    <h4 class="mb-4">Enable or disable components you need</h4>

    <p>
        Even though all components come enabled out-of-the-box,
        you may want to load only the components you need in your app for performance reasons.
        To do so, first publish the config file, then remove the components you don't need from the components settings.
    </p>

    <x-doc.code language="php">
return [
    'components' => [
        // Usage
        // 'component-alias' => 'ComponentClassName OR path.to.component-view',

        //
        // Accordion
        //

        'accordion'         => 'ui::accordion.index',
        'accordion.item'    => 'ui::accordion.item',

        //
        // Alert
        //

        'alert'  => \Laraloop\UI\Components\Alerts\Alert::class,

        // ...
    ],

    // ...
];
    </x-doc.code>

    <h4>Prefixing</h4>

    <p>
        Components from this library might conflict with other ones from different libraries, or components from your own app.
        To prevent this, you can opt to add a prefix to the Blade UI Kit components.
        You can do this by setting the prefix option in the config file:
    </p>

    <x-doc.code language="php">
return [
    // ...
    'prefix' => 'ui',
    // ...
];
    </x-doc.code>

    <p>
        Now all components can be referenced as usual, but with the prefix before their name:
    </p>

    <x-doc.code>
        @verbatim
<x-ui-alert type="error" message="Hi, there! I'm an alert type danger component." />
        @endverbatim
    </x-doc.code>

    <x-alert type="info" message="For obvious reasons, the docs don't use any prefix in their code examples. So keep this in mind when setting a prefix and copy/pasting code snippets." />
@endsection

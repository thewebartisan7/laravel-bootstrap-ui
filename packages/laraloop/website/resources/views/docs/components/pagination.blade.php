@extends('website::layouts.doc', ['title' => 'Pagination'])

@section('content')
    <h4>How it works</h4>
    <p>
        Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.
        We use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas.
        Pagination is built with list HTML elements so screen readers can announce the number of available links.
    </p>

    <x-doc.demo title="Basic example" description="Use the border spinners for a lightweight loading indicator.">
        <x-pagination>
            <x-pagination.item label="Previous" disabled />
            <x-pagination.item to="/docs/components/pagination?page=1" label="1" />
            <x-pagination.item to="/docs/components/pagination?page=2" label="2" />
            <x-pagination.item to="/docs/components/pagination?page=3" label="3" />
            <x-pagination.item to="/docs/components/pagination?page=4" label="Next" />
        </x-pagination>

        <x-slot name="code">
            @verbatim
<x-pagination>
    <x-pagination.item label="Previous" disabled />
    <x-pagination.item to="/docs/components/pagination?page=1" label="1" />
    <x-pagination.item to="/docs/components/pagination?page=2" label="2" />
    <x-pagination.item to="/docs/components/pagination?page=3" label="3" />
    <x-pagination.item to="/docs/components/pagination?page=4" label="Next" />
</x-pagination>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <h4 class="mt-5">Important notes regarding active status</h4>

    <x-alert class="mt-3">
        You have notice that we are using prop <code>to</code> for set URL.
        In this case will be used the <code>x-link</code> component which set automatically the current page.
        You can see this by clicking to pagination links.
        So you can pass also the route name and optional <code>params</code>.
    </x-alert>

    <x-alert>
        Bootstrap set the active link to <code>.page-item</code> and not <code>.page-link</code>.
        So the <code>x-link</code> component that add active class to itself would not be styled.
        I have made a <a href="https://github.com/twbs/bootstrap/pull/35804" target="_blank">PR</a>
        which style also <code>.page-link</code> with active class, and is now part of Bootstrap core.
        In case your Bootstrap version doesn't include this addition, you can either set <code>active</code> prop
        yourself to <code>x-pagination.item</code> or add below SCSS code:
    </x-alert>

    <x-doc.code language="scss">
        @verbatim
.page-link  {
    &.active,
    .active > & {
        z-index: 3;
        color: $pagination-active-color;
        @include gradient-bg($pagination-active-bg);
        border-color: $pagination-active-border-color;
    }

    &.disabled,
    .disabled > & {
        color: $pagination-disabled-color;
        pointer-events: none;
        background-color: $pagination-disabled-bg;
        border-color: $pagination-disabled-border-color;
    }
}
        @endverbatim
    </x-doc.code>

    <p>
        You should find also this code commented in file <code>resources/scss/bootstrap/_pagination.scss</code>.
    </p>

@endsection

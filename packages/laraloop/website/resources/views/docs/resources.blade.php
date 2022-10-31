@extends('website::layouts.doc', ['title' => 'Resources'])

@section('content')
    <x-list-group>
        <x-list-group.item.a href="https://laravel.com/docs/8.x/blade#components">
            Laravel Blade Components Documentation
        </x-list-group.item.a>

        <x-list-group.item.a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">
            Bootstrap Documentation
        </x-list-group.item.a>

        <x-list-group.item.a href="https://turbo.hotwired.dev/handbook/introduction">
            Hotwired Handbook
        </x-list-group.item.a>

        <x-list-group.item.a href="https://stimulus.hotwired.dev/">
            Stimulus Handbook
        </x-list-group.item.a>
    </x-list-group>
@endsection

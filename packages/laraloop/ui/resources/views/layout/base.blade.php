<!DOCTYPE html>
<html lang="{{ $locale() }}" {!! config('app.debug') ? 'data-debug="true"' : '' !!} class="min-vh-100"
      @isset($controller) data-controller="{{ $controller }}" {!! $controllerData ?? '' !!} @endisset>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <title>{{ $headTitle() }}</title>
  <meta name="description" content="{{ $description }}">
  @isset($root)<meta name="turbo-root" content="{{ $root }}">@endisset
  {{-- <x-seo :title="$title" :description="$description" type="website" card="summary_large_image" image="image" url="" /> --}}
  <x-favicons :path="asset('assets/favicons')" color="7952b3"/>
  {{-- <x-gfont :font="['Barlow+Semi+Condensed:wght@400;500', 'Source+Sans+Pro:wght@300']" /> --}}
  <link rel="stylesheet" type="text/css" href="{{ mix($css ?? '/css/app.css') }}" data-turbo-track="reload">
  {{-- <x-gtag :key="1234" /> --}}
  <script src="{{ mix($js ?? '/js/app.js') }}" data-turbo-track="reload" defer></script>
  @stack('head')
</head>
<body {{ $attributes }}>
{{ $slot }}
@stack('body-end')
</body>
</html>

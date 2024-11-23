<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - {{ setting('site_name', '外国人車関係車関係の仕事の雑談') }}</title>
  <meta name="description" content="@yield('description', setting('seo_description', '車、整備、仕事、雑談'))" />
  <meta name="keywords" content="@yield('keyword', setting('seo_keyword', '車、整備、仕事、雑談'))" />

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @yield('styles')
  @livewireStyles

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  {{-- @if (app()->isLocal())
  @include('sudosu::user-selector')
  @endif --}}

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  @livewireScripts

  @yield('scripts')

</body>

</html>
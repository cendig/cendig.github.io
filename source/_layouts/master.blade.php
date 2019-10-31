<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }} {{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
        <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script type="application/javascript" src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body>
        <div class="uk-navbar-container uk-navbar-transparent primary-nav" style="min-height: 80px">
            <div class="uk-container">
                @include('_nav.navbar', ['items' => $page->navigation])
                @include('_nav.offcanvas', ['items' => $page->navigation])
            </div>
        </div>

        {{--<div class="uk-container">--}}
            <div class="content">
                @yield('body')
                {{--<footer class="uk-section uk-section-secondary uk-section-small ">--}}
                    {{--<div class="uk-text-center">&copy; Archlancier Systems Limited </div>--}}
                {{--</footer>--}}
            </div>
        {{--</div>--}}
        <footer class="uk-section uk-section-secondary uk-section-small ">
            <div class="uk-container">
                <div class="uk-text-center">&copy; Centrisign Digital Limited</div>
            </div>
        </footer>
        @stack('scripts')
    </body>
</html>

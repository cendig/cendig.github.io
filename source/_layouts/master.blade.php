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
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <style>
            .tpl-uk-icon {
                padding: 5px;
            }
        </style>

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

        <div class="content">
            @yield('body')
        </div>

        <footer class="uk-section uk-section-secondary uk-section-small ">
            <div class="uk-container uk-container-expand">
                <div class="uk-flex-between" uk-grid>
                    <div>
                        <a href="https://twitter.com/centrisign" class="tpl-uk-icon" target="_blank"><i uk-icon="icon: twitter; ratio: 1.5"></i></a>
                        <a href="https://www.linkedin.com/company/centrisign/" class="tpl-uk-icon" target="_blank"><i uk-icon="icon: linkedin; ratio: 1.5"></i></a>
                        <a href="https://www.facebook.com/centrisign" class="tpl-uk-icon" target="_blank"><i uk-icon="icon: facebook; ratio: 1.5"></i></a>
                        <a href="https://www.instagram.com/centrisign/" class="tpl-uk-icon" target="_blank"><i uk-icon="icon: instagram; ratio: 1.5"></i></a>
                    </div>
                    <div class="uk-text-center">Senteu Plaza, 6th floor Galana/Lenana Rd Kilimani, Nairobi</div>
                    <div><a href="mailto:info@centrisign.africa" class="uk-text-bold">info@centrisign.africa</a></div>
                </div>
            </div>
        </footer>
        @stack('scripts')
    </body>
</html>

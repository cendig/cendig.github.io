<div class="uk-navbar" uk-navbar>
    <div class="uk-navbar-left">
        <a href="#" class="uk-hidden@s uk-margin-left" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-menu"></a>
        <a href="/" class="uk-navbar-item uk-logo uk-visible@s">
            <img uk-image="" src="/assets/images/logo-black.png" class="uk-margin-small-right uk-padding-small" width="200">
        </a>
    </div>
    <div class="uk-navbar-center">
        <a href="/" class="uk-navbar-item uk-logo uk-hidden@s">
            <img uk-svg="" src="/assets/images/logo-black.png" class="uk-margin-small-right uk-padding-small" width="200">
        </a>
        <ul class="uk-navbar-nav uk-visible@s">
            @foreach ($items as $label => $item)
                @if ($url = is_string($item) ? $item : $item->url)
                    <li>
                        <a href="{{ $page->url($url) }}"> {{ $label }}</a>

                        @if (! is_string($item) && isset($item['children']))
                            {{-- Recursively handle children --}}
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    @foreach($item['children'] as $childLabel => $childMenu)
                                        @if ($childUrl = is_string($childMenu) ? $childMenu : $childMenu->url)
                                            <li>
                                                <a href="{{ $page->url($childUrl) }}">{{ $childLabel }}</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="#">{{ $childLabel }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </li>
                @else
                    <li>
                        <a href="#"> {{ $label }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>

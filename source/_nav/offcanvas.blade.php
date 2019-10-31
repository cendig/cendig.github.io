<div id="offcanvas-menu" uk-offcanvas="overlay: true;" class="uk-offcanvas uk-open">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-text-center uk-offcanvas-bar-animation uk-offcanvas-slide">

        <button class="uk-offcanvas-close uk-close-large uk-close uk-icon" type="button" uk-close="">
            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="close-large"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line>
                <line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line>
            </svg>
        </button>

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical uk-nav-parent-icon" uk-nav>
            @foreach ($items as $label => $item)
                @if ($url = is_string($item) ? $item : $item->url)
                    <li @if(isset($item['children'])) class="uk-parent" @endif>
                        <a href="{{ $page->url($url) }}"> {{ $label }}</a>

                        @if (! is_string($item) && $item['children'])
                            {{-- Recursively handle children --}}
                            <ul class="uk-nav-sub" hidden="" aria-hidden="true">
                                @foreach($item['children'] as $childLabel => $childMenu)
                                    @if ($url = is_string($childMenu) ? $childMenu : $childMenu->url)
                                        <li>
                                            <a href="{{ $page->url($url) }}">{{ $childLabel }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="#">{{ $label }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
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
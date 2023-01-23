---
extends: _layouts.master
title: Insights
page_description: Blog articles giving our insights and knowledge about technology and business
meta_description: Centrisign Digital is a capable IT consulting and software development Company with experience from a wide range of clients and applications deployed. We have worked with clients from the E-commerce, Retail, Non-Profit Industries.
---

@section('body')
    <div class="uk-section uk-section-muted uk-section-small uk-padding-small">
        <div class="uk-container">
            <h1 class="uk-text-center uk-text-bold uk-text-large" style="margin: 0 0 5px 0; font-size: 18px">{{ $page->title ? $page->title : '' }}</h1>
        </div>
    </div>
    @if(!empty($page->getFeaturedPost()))
        <!-- HERO -->
        <section class="uk-section uk-section-small uk-padding uk-padding-remove-horizontal bg-pattern-one">
            <div class="uk-container">
                <div class="uk-height-large uk-cover-container uk-border-rounded">
                    <img src="{{ $page->getFeaturedPost()['featured_image'] }}" alt="Alt img" data-uk-cover>
                    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center">
                        <div data-uk-scrollspy="cls: uk-animation-slide-bottom-small">
                            <span style="letter-spacing: 0.2em; font-size: 0.725rem">FEATURED ARTICLE</span>
                            <h1 class="uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent">{{ $page->getFeaturedPost()['title'] }}</h1>
                            <p>{!! $page->getFeaturedPost()['excerpt'] !!}</p>
                            <a href="/insights/{{ $page->getFeaturedPost()['slug'] }}" title="Read more - {{ $page->getFeaturedPost()->title }}" class="uk-button uk-button-default uk-margin-top">GO TO ARTICLE</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- HERO -->
    @endif

    <div class="uk-background-muted uk-padding uk-padding-remove-bottom uk-padding-remove-horizontal">
        <!-- FEATURED -->
        <div class="uk-container">
            <h4 class="uk-heading-line uk-text-bold"><span>Top Reads</span></h4>
            <div data-uk-slider="velocity: 5">
                <div class="uk-position-relative uk-padding-bottom">
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-medium news-slide">
                            @foreach($page->getPinnedPosts() as $post)
                                <li>
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded">
                                        <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                                            <div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1">
                                                <a href="/insights/{{ $post['slug'] }}">
                                                    <img src="{{ $post['featured_image'] }}" alt="{{ $post['title'] }}">
                                                </a>
                                            </div>
                                            <div class="uk-width-2-3@s uk-width-3-5@m">
                                                <span class="uk-label uk-label-warning" style="font-size: 0.75rem">Trends</span>
                                                <h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom">
                                                    <a class="uk-link-reset" href="/insights/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                                                </h3>
                                                <span class="uk-article-meta">Published 12th August 2019</span>
                                                <p class="uk-margin-small">{!! $post['excerpt'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="uk-hidden@l uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous
                           data-uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next
                           data-uk-slider-item="next"></a>
                    </div>
                    <div class="uk-visible@l">
                        <a class="uk-position-center-left-out uk-position-small" href="#" data-uk-slidenav-previous
                           data-uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" data-uk-slidenav-next
                           data-uk-slider-item="next"></a>
                    </div>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin">
                    <li></li>
                </ul>
            </div>
        </div>
        <!-- /FEATURED -->
        <!--CONTENT-->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid" data-ukgrid>
                    <div class="uk-width-2-3@m">
                        <h4 class="uk-heading-line uk-text-bold"><span>Latest Articles</span></h4>
                        @foreach($posts as $post)
                            <div class="uk-card uk-card-body uk-background-default uk-padding uk-margin-medium-bottom uk-border-rounded">
                                <article class="uk-section uk-section-small uk-padding-remove-top">
                                    <header>
                                        <h2 class="uk-margin-remove-adjacent uk-text-bold uk-margin-small-bottom">
                                            <a title="Fusce facilisis tempus magna ac dignissim." class="uk-link-reset" href="/insights/{{ $post['slug'] }}">
                                                {{ $post['title'] }}
                                            </a>
                                        </h2>
                                        <p class="uk-article-meta">Written on March 23, 2019. Posted in <a href="#">Blog</a> | <span data-uk-icon="icon: future"></span> Takes 7 min reading.</p>
                                    </header>
                                    <figure>
                                        <a href="/insights/{{ $post['slug'] }}">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAEsCAYAAAA7Ldc6AAADuUlEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMA3p/4AAaxRls8AAAAASUVORK5CYII="
                                                 data-src="{{ $post['featured_image'] }}" width="800" height="300"
                                                 alt="Alt text" class="lazy" data-uk-img>
                                        </a>
                                        <figcaption class="uk-padding-small uk-text-center uk-text-muted">Caption of the image</figcaption>
                                    </figure>
                                    <div>
                                        {!! $post['excerpt'] !!}
                                    </div>
                                    <a href="/insights/{{ $post['slug'] }}" title="Read More" class="uk-button uk-button-default uk-button-small">READ MORE</a>
                                    <hr>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    {{--                <div class="uk-width-1-3@m">--}}
                    {{--                    <div data-uk-sticky="offset: 90;media:@m">--}}
                    {{--                        <h4 class="uk-heading-line uk-text-bold"><span>Archive</span></h4>--}}
                    {{--                        <ul class="uk-list">--}}
                    {{--                            <li><a href="">March</a></li>--}}
                    {{--                            <li><a href="">February</a></li>--}}
                    {{--                            <li><a href="">January</a></li>--}}
                    {{--                            <li><a href="">December <small>(2017)</small></a></li>--}}
                    {{--                            <li><a href="">November <small>(2017)</small></a></li>--}}
                    {{--                            <li><a href="">October <small>(2017)</small></a></li>--}}
                    {{--                            <li><a href="">September <small>(2017)</small></a></li>--}}
                    {{--                            <li><a href="">August <small>(2017)</small></a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
        <!--/CONTENT-->
    </div>

    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container uk-container-small">
            <div class="uk-text-center">
                <h4 class="uk-text-lead uk-text-bold">Do you have a project for us?</h4>
                <p>We have worked on great projects (big and small) with amazing clients. </p>
                <p>contact us and let's innovate work together.</p>
                <a href="mailto:info@centrisign.africa" class="uk-button uk-button-danger uk-button-large"><span class="uk-text-bold">Let's Talk</span></a>
            </div>
        </div>
    </section>
@endsection
@extends('_layouts.master')

@section('is_article')
    <span></span>
@endsection

@section('body')
    <div class="uk-section uk-section-muted uk-section-small uk-padding-small">
        <div class="uk-container">
            <h1 class="uk-text-center uk-text-bold uk-text-large" style="margin: 0 0 5px 0; font-size: 18px">Insights</h1>
        </div>
    </div>

    <section class="uk-section uk-article">
        <div class="uk-container uk-container-small uk-margin-remove-bottom">
            <h2 class="uk-text-bold uk-h1 uk-margin-remove-adjacent uk-margin-remove-top">{{ $page->title ? $page->title : '' }}</h2>
            <p class="uk-article-meta">Written on {{ $page->getDate() }}.
{{--                &nbsp; Posted in <a href="#">Blog</a>--}}
                &nbsp; |
                &nbsp; <span data-uk-icon="icon: future"></span> Takes 7 min reading.</p>

            <div class="uk-text-lead">
                {!! $page->excerpt !!}
            </div>
            <hr>
        </div>

        <div class="uk-section uk-section-small">
            <div class="uk-container uk-container-small">
                {!! $page->body !!}
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-muted uk-section-small">
        <div class="uk-container uk-container-small">
            <div class="uk-text-center">
                <h4 class="uk-text-lead uk-text-bold">Want to work with us?</h4>
                <p>We have worked with a diverse set of clients, each with different needs.</p>
                <p></p>
                <p>Reach out and let's work together.</p>
                <a href="mailto:info@centrisign.africa" class="uk-button uk-button-danger uk-button-large"><span class="uk-text-bold">Let's Talk</span></a>
            </div>
        </div>
    </section>

    <!-- BOTTOM BAR -->
    <div class="uk-section uk-section-xsmall uk-section-default uk-position-bottom uk-position-fixed" style="border-top: 1px solid #f2f2f2">
        <div class="uk-container uk-container-small uk-text-small">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-expand">
                    @if ($page->getNext())
                        <a href="{{ $page->getNext()->getPath() }}" class="uk-link-reset">
                            <span data-uk-icon="icon: arrow-right"></span>
                            <strong>Next article</strong>
                            <span class="uk-visible@s">- {{ $page->getNext()->title }}</span>
                        </a>
                    @else
                        @if($page->getPrevious())
                            <a href="{{ $page->getPrevious()->getPath() }}" class="uk-link-reset">
                                <span data-uk-icon="icon: arrow-right"></span>
                                <strong>Another article</strong>
                                <span class="uk-visible@s">- {{ $page->getPrevious()->title }}</span>
                            </a>
                        @endif
                    @endif
                </div>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <div class="uk-width-auto uk-text-right">
                    <span style="font-size: 21px; margin-top: 15px;">Share &nbsp;</span>
                    <a href="#" class="uk-icon-button facebook-blue fb-share-button" data-uk-icon="icon: facebook"></a>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="uk-icon-button twitter-blue twitter-share-button" data-uk-icon="icon: twitter"  data-show-count="false"></a>
                    <a href="#" class="uk-icon-button linkedin-blue" data-uk-icon="icon: linkedin" target="_blank"></a>
{{--                    <a href="https://linkedin.com/shareArticle?url={{ $page->getUrl() }}&title={{ $page->title }}" class="uk-icon-button linkedin-blue" data-uk-icon="icon: linkedin" target="_blank"></a>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- /BOTTOM BAR -->
@endsection
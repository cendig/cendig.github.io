@extends('_layouts.master')

@section('body')
    <div class="uk-section uk-section-muted uk-section-small uk-padding bg-yellow-dark" data-src="./../assets/images/folk-pattern.png" uk-img>
        <div class="uk-container">
            <p class="uk-text-uppercase uk-text-center uk-text-bold" style="margin: 0 0 5px 0; font-size: 18px">Insight</p>
            <h1 class="uk-text-center uk-margin-remove-top">{{ $page->title ? $page->title : '' }}</h1>
        </div>
        <div class="uk-overlay-default"></div>
    </div>
    <div class="uk-section">
        <div class="uk-container uk-container-small">
            <img class="uk-border-circle" src="{{ $page->avatar }}" width="200" height="200" alt="Border circle">
            <h1>{{ $page->name }}</h1>
            <h1>{{ $page->bio }}</h1>
        </div>
    </div>

    <div class="uk-section uk-section-muted uk-section-small uk-padding-small">
        <div class="uk-container">
            <div class="uk-padding-small" uk-grid>
                <div class="uk-width-expand@m">
                    <div>
                        @foreach($page->posts as $post)
                            @include('_components.insights_preview_inline', ['authorName' => $page->name] )
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    uk-section-default--}}
    <section class="uk-section uk-section-muted uk-section-small">
        <div class="uk-container uk-container-small">
            <div class="uk-text-center">
                <h4 class="uk-text-lead uk-text-bold">Do you have a project for us?</h4>
                <p>We have worked on cool projects with some cool clients. </p>
                <p>Join in and let's innovate together.</p>
                <a href="mailto:info@centrisign.africa" class="uk-button uk-button-danger uk-button-large"><span class="uk-text-bold">Let's Talk</span></a>
            </div>
        </div>
    </section>
@endsection
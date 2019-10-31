@extends('_layouts.master')

@section('body')
    <div class="uk-section uk-section-muted uk-section-small uk-padding-small bg-yellow-dark" data-src="./../assets/images/folk-pattern.png" uk-img>
        <div class="uk-container">
            <h1 class="uk-text-center">{{ $page->title ? $page->title : '' }}</h1>
            <div class="heading-border"></div>
        </div>
        <div class="uk-overlay-default"></div>
    </div>
    @yield('content')
@endsection


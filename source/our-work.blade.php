---
extends: _layouts.page
title: Our Work
meta_description: Centrisign Digital is a capable IT consulting and software development Company with experience from a wide range of clients and applications deployed. We have worked with clients from the E-commerce, Retail, Non-Profit Industries.
---

@section('content')
    <div class="uk-section uk-section-muted uk-section-small uk-padding-small">
        <div class="uk-container">
            <div class="uk-child-width-1-3 uk-grid-medium uk-padding-small" uk-grid>
                <div>
                    <h2>Products</h2>
                    <p>Every day, We are working hard on client projects as well as our own inhouse projects.</p>
                    <p>Over time we have gained extensive experience with enterprise ERP systems as well as financial systems. Here are just but a few of some awesome projects we have accomplished.</p>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-child-width-1-2 uk-grid-small" uk-height-match="target: > div > .uk-card > .uk-card-media-top .uk-card-body" uk-grid>
                        @foreach($case_studies as $case_study)
                            @include('_components.casestudy_preview_inline')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
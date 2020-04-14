---
extends: _layouts.page
title: Insights
meta_description: Centrisign Digital is a capable IT consulting and software development Company with experience from a wide range of clients and applications deployed. We have worked with clients from the E-commerce, Retail, Non-Profit Industries.
---

@section('content')
    <div class="uk-section uk-section-muted uk-section-small uk-padding-small">
        <div class="uk-container">
            <div class="uk-padding-small" uk-grid>
                <div class="uk-width-expand@m">
                    <div>
                        @foreach($posts as $post)
                            @include('_components.insights_preview_inline')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
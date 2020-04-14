<div>
    <div class="uk-child-width-1-3 uk-grid-small uk-padding-small" uk-grid>
        <div>
            <a href="{{ $post->getUrl() }}">
                @if($post->featured_image !== null)
                    <img class="image-rounded uk-float-right uk-margin-medium-right" src="{{ $post->featured_image }}" alt="{{ $post->title }}" uk-img>
                @else
                    <img src="" alt="{{ $post->title }}" uk-img>
                @endif
            </a>
        </div>
        <div>
            <a href="{{ $post->getUrl() }}" class="uk-link-reset">
                <h3 class="uk-text-large uk-text-bold" style="margin-top: 0">{{ $post->title }}</h3>
            </a>
            <p>{{ $post->excerpt }}</p>
        </div>
    </div>
{{--    <div class="uk-card uk-card-default">--}}
{{--        <div class="uk-card-media-top">--}}
{{--            <a href="{{ $post->getUrl() }}">--}}
{{--                @if($post->featured_image !== null)--}}
{{--                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" uk-img>--}}
{{--                @else--}}
{{--                    <img src="" alt="{{ $post->title }}" uk-img>--}}
{{--                @endif--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="uk-card-body" style="padding: 20px 20px">--}}
{{--            <a href="{{ $post->getUrl() }}" class="uk-link-reset">--}}
{{--                --}}{{--                <p style="margin: 0 0 5px 0">{{ $post->client }}</p>--}}
{{--                <h3 class="uk-card-title" style="margin-top: 0">{{ $post->title }}</h3>--}}
{{--            </a>--}}
{{--            <p>{{ $post->excerpt }}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
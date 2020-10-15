<div>
    <div class="uk-grid-medium uk-padding-large uk-padding-remove-top" uk-grid>
        <div class="uk-width-1-3">
            <a href="{{ $post->getUrl() }}">
                @if($post->featured_image !== null)
                    <img class="image-rounded uk-float-right uk-margin-medium-right" src="{{ $post->featured_image }}" alt="{{ $post->title }}" uk-img>
                @else
                    <img src="" alt="{{ $post->title }}" uk-img>
                @endif
            </a>
        </div>
        <div class="uk-width-expand">
            <a href="{{ $post->getUrl() }}" class="uk-link-reset">
                <h3 class="uk-text-large uk-text-bold" style="margin-top: 0">{{ $post->title }}</h3>
            </a>
{{--            <p class="uk-article-meta uk-text-uppercase">Written by <a href=""><span class="brand-yellow-color">{{ ($post->author) ? $post->author['name'] : $authorName }}</span></a> on <span class="brand-yellow-color">{{ $post->publish_date }}</span>.</p>--}}
            <p>{{ $post->excerpt }}</p>
        </div>
    </div>
</div>
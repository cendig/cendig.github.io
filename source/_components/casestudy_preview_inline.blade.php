<div>
    <div class="uk-card uk-card-default">
        <div class="uk-card-media-top">
            <a href="{{ $case_study->getUrl() }}">
                <img src="./../{{ $case_study->image }}" alt="{{ $case_study->title }}" uk-img>
            </a>
        </div>
        <div class="uk-card-body" style="padding: 20px 20px">
            <a href="{{ $case_study->getUrl() }}" class="uk-link-reset">
                <p style="margin: 0 0 5px 0">{{ $case_study->client }}</p>
                <h3 class="uk-card-title" style="margin-top: 0">{{ $case_study->title }}</h3>
            </a>
        </div>
    </div>
</div>
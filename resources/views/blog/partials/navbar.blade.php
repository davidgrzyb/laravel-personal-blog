<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col text-center mb-3 mt-3">
            <a href="{{ route('blog.index') }}">
                <div style="background-image: url({{ asset('storage/david-grzyb-animoji.jpg') }});border:8px solid #D8DEE9;" class="blog-avatar"></div>
            </a>
            <a id="brand" class="text-decoration-none font-weight-bolder" href="{{ route('blog.index') }}">{{ config('app.name', __('canvas::blog.title')) }}</a>
            <p class="blog-tagline pt-4">Laravel Developer in Ontario, Canada 🇨🇦</p>
        </div>
    </div>
</header>

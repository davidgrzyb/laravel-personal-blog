<header>
    <div class="flex flex-col items-center pt-8 pb-10">
        <div>
            <a class="text-center" href="{{ route('blog.index') }}">
                <img class="w-48 rounded-full border-8 border-gray-header" src="{{ getAsset('storage/david-grzyb-animoji.jpg') }}" loading="lazy">
            </a>
        </div>
        <div class="pt-2">
            <a class="text-center text-header-gray font-rubik text-5xl font-medium" href="{{ route('blog.index') }}">{{ config('app.name', __('canvas::blog.title')) }}</a>
        </div>
        <div class="pt-2">
            <p class="text-center text-sub-header-gray font-rubik text-xl">{{ config('blog.taglines.header') }}</p>
        </div>
    </div>
</header>

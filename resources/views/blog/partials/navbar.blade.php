<header>
    <div class="flex flex-col items-center pt-8 pb-10">
        <div>
            <a class="text-center" href="{{ route('blog.index') }}">
                <img class="w-40 rounded-full border-8 border-gray-header" src="{{ getAsset('storage/david-grzyb-animoji.jpg') }}" loading="lazy">
            </a>
        </div>
        <div class="pt-3">
            <a class="text-center text-header-gray font-rubik text-4xl font-medium" href="{{ route('blog.index') }}">{{ config('app.name', __('canvas::blog.title')) }}</a>
        </div>
        <div class="pt-3 flex flex-col items-center">
            <!-- <p class="text-center text-sub-header-gray font-rubik text-xl">{{ config('blog.taglines.header') }}</p> -->
            <a href="https://twitter.com/davidgrzyb?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-dnt="true" data-show-count="false">Follow @davidgrzyb</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</header>

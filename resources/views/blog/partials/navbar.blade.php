<header class="w-full flex flex-col border-b border-gray">
    <div class="flex items-center justify-center py-10">
        <a href="{{ route('blog.index') }}">
            <img class="w-16 md:w-24 rounded-full border-4 border-gray-header mr-6 sm:mr-6" src="{{ getAsset('storage/david-grzyb-animoji.jpg') }}" loading="lazy">
        </a>
        <div class="">
            <div class="">
                <a class="text-header-gray font-rubik text-4xl md:text-5xl font-medium leading-none" href="{{ route('blog.index') }}">{{ config('app.name', __('canvas::blog.title')) }}</a>
                <p class="text-sub-header-gray font-rubik text-base md:text-xl">{{ config('blog.taglines.header') }}</p>
            </div>
            <!-- <a href="https://twitter.com/davidgrzyb?ref_src=twsrc%5Etfw" class="twitter-follow-button hidden md:show" data-size="large" data-dnt="true" data-show-count="false">Follow @davidgrzyb</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
        </div>
    </div>
    @if(config('blog.topics_enabled') && $data['topics']->count() > 0)
        <div class="justify-around items-center border-t border-gray py-1 hidden md:flex">
            @foreach($data['topics'] as $topic)
                <a href="{{ route('blog.topic', [$topic->slug]) }}" class="text-sub-header-gray font-rubik text-base hover:bg-gray-200 focus:bg-gray-200 px-3 py-2 rounded @if($data['slug'] === $topic->slug) bg-gray-200 @endif">{{ $topic->name }}</a>
            @endforeach
        </div>

        <div class="w-full border-t border-gray py-1 md:hidden" x-data="{ open: false }">
            <div class="block sm:hidden">
                <a 
                    href="#" 
                    class="block md:hidden text-base font-medium uppercase text-center flex justify-center items-center text-sub-header-gray py-2" 
                    @click="open = !open"
                    x-text="open ? 'Close': 'Topics'"
                ></a>
            </div>
            <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm uppercase mt-0 px-6 py-2">
                    @foreach($data['topics'] as $topic)
                        <a href="{{ route('blog.topic', [$topic->slug]) }}" class="text-sub-header-gray font-rubik text-base hover:bg-gray-200 focus:bg-gray-200 px-3 py-2 rounded @if($data['slug'] === $topic->slug) bg-gray-200 @endif">{{ $topic->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</header>

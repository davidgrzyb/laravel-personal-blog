<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 md:ml-4">
    <!-- <div class="flex flex-col items-center w-full py-8 bg-white my-8 shadow-md">
        <a href="#" class="text-2xl mb-3">{{ config('app.name', __('canvas::blog.title')) }}</a>
        <p class="text-gray-500 mb-6">{{ config('blog.taglines.header') }}</p>
        <div class="flex items-center justify-center">
            <a target="_blank" rel="noreferrer" href="https://github.com/davidgrzyb">
                <span class="icon-github text-2xl mr-1 text-gray-700 hover:text-black target:text-black"></span>
            </a>
            <a target="_blank" rel="noreferrer" href="https://angel.co/davidgrzyb">
                <span class="icon-angellist text-2xl mx-1 text-gray-700 hover:text-black target:text-black"></span>
            </a>
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/david-grzyb/">
                <span class="icon-linkedin text-2xl ml-1 text-gray-700 hover:text-black target:text-black"></span>
            </a>
        </div>
    </div> -->
    <div class="w-full bg-white my-8 shadow-md">
        <div class="w-full bg-white p-4 text-lg text-gray-600">Categories</div>
        @foreach($data['topics'] as $topic)
            <a href="{{ route('blog.topic', [$topic->slug]) }}" class="w-full text-gray-600 px-4 py-5 flex items-center justify-between border-t hover:bg-gray-100">
                <span class="">{{ $topic->name }}</span>
                <span class=""></span>
            </a>
        @endforeach
    </div>
    @if(config('blog.cta.sidebar.enabled'))
        <div class="w-full bg-white my-8 shadow-md">
            <div class="w-full bg-gray-200 p-4 text-lg text-gray-600">{{ config('blog.cta.sidebar.title') }}</div>
            <div class="p-4 flex flex-col">
                <!-- <img src="https://source.unsplash.com/OGOWDVLbMSc/400x200" class="rounded shadow mb-4"> -->
                <span class="text-gray-700">{{ config('blog.cta.sidebar.description') }}</span>
            </div>
            <a href="#" class="w-full text-gray-600 px-4 py-4 flex items-center justify-center border-t hover:bg-gray-100">Get the FREE Course <i class="fas fa-arrow-right ml-2"></i></a>
        </div>
    @endif
</aside>
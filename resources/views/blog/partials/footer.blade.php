<footer class="w-full bg-white px-4 md:px-0">
    <div class="container mx-auto py-6 flex flex-col md:flex-row items-center justify-between">
        <span class="text-center md:text-left text-gray-600">© {{ now()->year }} {{ config('app.name', __('canvas::blog.title')) }}. {{ config('blog.taglines.header') }}</span>
        <div class="flex mt-6 mb-4 md:my-0">
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
    </div>
</footer>
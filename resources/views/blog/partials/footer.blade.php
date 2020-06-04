<footer class="w-full bg-white px-4 md:px-0">
    <div class="container mx-auto py-6 flex flex-col md:flex-row items-center justify-between">
        <span class="text-center md:text-left text-gray-600">© {{ now()->year }} {{ config('app.name', __('canvas::blog.title')) }}. {{ config('blog.taglines.header') }}</span>
        <div class="flex mt-6 mb-4 md:my-0">
            <a target="_blank" rel="noreferrer" href="https://github.com/davidgrzyb">
                <img class="w-6 h-6 opacity-75 hover:opacity-100" src="{{ getAsset('storage/github-icon.svg') }}" loading="lazy">
            </a>
            <a target="_blank" rel="noreferrer" href="https://angel.co/davidgrzyb">
                <img class="w-6 h-6 opacity-75 hover:opacity-100 ml-2" src="{{ getAsset('storage/angel-icon.svg') }}" loading="lazy">
            </a>
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/david-grzyb/">
                <img class="w-6 h-6 opacity-75 hover:opacity-100 ml-2" src="{{ getAsset('storage/linkedin-icon.svg') }}" loading="lazy">
            </a>
        </div>
    </div>
</footer>
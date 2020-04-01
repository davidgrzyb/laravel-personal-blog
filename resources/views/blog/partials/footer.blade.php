<footer>
    <p class="text-center text-header-gray font-rubik text-base p-4">
        {{ config('blog.taglines.footer') }}
    </p>
    <div class="flex justify-center">
        <div class="text-center p-4">
            <a target="_blank" rel="noreferrer" href="https://github.com/davidgrzyb">
                <img class="w-8 h-8 opacity-75 hover:opacity-100" src="{{ getAsset('storage/github-icon.svg') }}" loading="lazy">
            </a>
        </div>
        <div class="text-center p-4">
            <a target="_blank" rel="noreferrer" href="https://angel.co/davidgrzyb">
                <img class="w-8 h-8 opacity-75 hover:opacity-100" src="{{ getAsset('storage/angel-icon.svg') }}" loading="lazy">
            </a>
        </div>
        <div class="text-center p-4">
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/david-grzyb/">
                <img class="w-8 h-8 opacity-75 hover:opacity-100" src="{{ getAsset('storage/linkedin-icon.svg') }}" loading="lazy">
            </a>
        </div>
    </ul>
</footer>
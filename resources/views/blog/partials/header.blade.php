<header class="w-full bg-white shadow-md">
    <div x-data="{ open: false }" class="container mx-auto">
        <div class="flex justify-between items-center py-5 px-4 md:px-2 border-b">
            <!-- Blog Title -->
            <a class="flex items-center" href="{{ route('blog.index') }}">
                <img class="w-12 h-12 rounded-full border-2 border-gray-header mr-3" src="{{ getAsset('storage/david-grzyb-animoji.jpg') }}" loading="lazy">
                <h1 class="md:hidden text-lg uppercase text-gray-600">{{ config('app.name', __('canvas::blog.title')) }}</h1>
            </a>
            <!-- Call to Action -->
            <div class="md:inline hidden text-gray-600">
                {!! config('blog.cta.navbar') !!}
            </div>
            <!-- Social Icons -->
            <div class="md:flex hidden">
                <a target="_blank" rel="noreferrer" href="https://github.com/davidgrzyb">
                    <img class="w-6 h-6" src="{{ getAsset('storage/github-icon.svg') }}" loading="lazy">
                </a>
                <a target="_blank" rel="noreferrer" href="https://angel.co/davidgrzyb">
                    <img class="w-6 h-6 ml-1" src="{{ getAsset('storage/angel-icon.svg') }}" loading="lazy">
                </a>
                <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/david-grzyb/">
                    <img class="w-6 h-6 ml-1" src="{{ getAsset('storage/linkedin-icon.svg') }}" loading="lazy">
                </a>
            </div>
            <div class="flex md:hidden">
                <button @click="open = !open" class="focus:outline-none"><i class="fa fa-bars text-2xl"></i></button>
            </div>
        </div>
        <nav class="flex justify-center items-center py-4 hidden md:flex">
            <div class="w-1/2 flex justify-around text-gray-600">
                <a href="{{ route('blog.index') }}" class="px-3 py-2 hover:underline">Blog</a>
                <div class="blog-menu px-3 py-2">
                    <a href="#" class="relative hover:underline">
                        Categories
                        <i class="fa fa-chevron-down ml-1"></i>
                    </a>
                    <div class="blog-menu-dropdown hidden absolute pt-5 z-10">
                        <div class="flex flex-col items-center bg-white rounded shadow-md border border-gray-300 w-56">
                            @foreach($data['topics'] as $topic)
                                <a href="{{ route('blog.topic', [$topic->slug]) }}" class="w-full text-gray-600 p-4 flex items-center justify-between hover:bg-gray-100 @if(isset($data['slug']) && $data['slug'] === $topic->slug) bg-gray-200 @endif">{{ $topic->name }}<span></span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="{{ route('blog.about') }}" class="px-3 py-2 hover:underline">About</a>
                <!-- <a href="#" class="px-3 py-2 hover:underline">Contact</a> -->
            </div>
            <!-- <div class="text-gray-700 px-3 py-2 hover:underline">
                <a href="#" class=""><i class="fas fa-shopping-cart mr-2"></i> Projects</a>
            </div> -->
        </nav>
        <nav x-ref="dropdown" x-show.transition="open" @click.away="open = false" class="flex flex-col items-center justify-center text-lg bg-white text-gray-600 py-4">
            <a href="{{ route('blog.index') }}" class="px-3 py-2 hover:underline">Blog</a>
            <!-- <a href="#" class="px-3 py-2 hover:underline">Categories</a> -->
            <a href="{{ route('blog.about') }}" class="px-3 py-2 hover:underline">About</a>
            <!-- <a href="#" class="px-3 py-2 hover:underline">Contact</a> -->
            <!-- <a href="#" class="px-3 py-2 hover:underline">Projects</a> -->
            <div class="flex items-center justify-center mt-2 py-3">
                <a target="_blank" rel="noreferrer" href="https://github.com/davidgrzyb">
                    <img class="w-8 h-8 px-1" src="{{ getAsset('storage/github-icon.svg') }}" loading="lazy">
                </a>
                <a target="_blank" rel="noreferrer" href="https://angel.co/davidgrzyb">
                    <img class="w-8 h-8 px-1 ml-2" src="{{ getAsset('storage/angel-icon.svg') }}" loading="lazy">
                </a>
                <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/david-grzyb/">
                    <img class="w-8 h-8 px-1 ml-2" src="{{ getAsset('storage/linkedin-icon.svg') }}" loading="lazy">
                </a>
            </div>
        </nav>
    </div>
</header>
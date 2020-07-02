@extends('blog.layouts.app')

@section('title', config('blog.about.meta.title'))
@section('description', config('blog.about.meta.description'))

@section('content')
    @include('blog.partials.header')

    <main class="container mx-auto flex-grow my-6 md:my-10 px-4">
        <div class="flex flex-col md:flex-row text-center md:justify-between align-center py-4">
            <h1 class="font-bold text-3xl text-gray-600">Free Templates</h1>
            <span class="pt-4 md:pt-2">
                <a class="github-button" href="https://github.com/davidgrzyb" data-size="large" aria-label="Follow @davidgrzyb on GitHub">Follow @davidgrzyb</a>
            </span>
        </div>

        <div class="flex flex-col md:flex-row bg-white rounded shadow mt-8">
            <div class="w-full md:w-1/2 flex flex-col px-6 py-8">
                <a class="font-bold text-xl text-gray-600 hover:underline" href="/tailwind-admin-dashboard-template">Admin Dashboard Template</a>
                <p class="text-gray-600 mt-2 flex-grow">An admin dashboard template built with Tailwind and Alpine.js</p>
                <div class="mt-6">
                    <a class="rounded-full border-2 bg-white text-black hover:bg-black hover:text-white hover:border-transparent transition duration-100 ease-in py-2 px-4" href="/tailwind-admin-dashboard-template">View Template</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 pt-6 px-6">
                <img src="{{ getAsset('storage/templates/tailwind-admin-template-david-grzyb.jpg') }}" alt="Admin Dashboard Template Screenshot" class="rounded-t border-gray-200 border-t-4 border-r-4 border-l-4" />
            </div>
        </div>

        <div class="flex flex-col md:flex-row bg-white rounded shadow mt-8">
            <div class="w-full md:w-1/2 flex flex-col px-6 py-8">
                <a class="font-bold text-xl text-gray-600 hover:underline" target="_blank" href="https://github.com/davidgrzyb/tailwind-blog-template">Blog Template</a>
                <p class="text-gray-600 mt-2 flex-grow">A simple blog & post template built with Tailwind and AlpineJS.</p>
                <div class="mt-6">
                    <a class="rounded-full border-2 bg-white text-black hover:bg-black hover:text-white hover:border-transparent transition duration-100 ease-in py-2 px-4" target="_blank" href="https://github.com/davidgrzyb/tailwind-blog-template">View Template</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 pt-6 px-6">
                <img src="{{ getAsset('storage/templates/david-grzyb-tailwind-blog-template.jpg') }}" alt="Blog Template Screenshot" class="rounded-t border-gray-200 border-t-4 border-r-4 border-l-4" />
            </div>
        </div>

        <div class="flex flex-col md:flex-row bg-white rounded shadow mt-8">
            <div class="w-full md:w-1/2 flex flex-col px-6 py-8">
                <a class="font-bold text-xl text-gray-600 hover:underline" target="_blank" href="https://github.com/davidgrzyb/tailwind-auth-template">Login & Register Templates</a>
                <p class="text-gray-600 mt-2 flex-grow">Login and register page templates built with Tailwind.</p>
                <div class="mt-6">
                    <a class="rounded-full border-2 bg-white text-black hover:bg-black hover:text-white hover:border-transparent transition duration-100 ease-in py-2 px-4" target="_blank" href="https://github.com/davidgrzyb/tailwind-auth-template">View Template</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 pt-6 px-6">
                <img src="{{ getAsset('storage/templates/david-grzyb-tailwind-css-auth-template.jpg') }}" alt="Logim and Register Template Screenshot" class="rounded-t border-gray-200 border-t-4 border-r-4 border-l-4" />
            </div>
        </div>
    </main>

    @include('blog.partials.footer')
@endsection

@push('scripts')
    <script async defer src="https://buttons.github.io/buttons.js"></script>
@endpush

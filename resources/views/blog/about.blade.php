@extends('blog.layouts.app')

@section('title', config('blog.about.meta.title'))
@section('description', config('blog.about.meta.description'))

@section('content')
    @include('blog.partials.header')

    <main class="w-full flex-grow my-6 md:my-10 px-4">
        <div class="container mx-auto flex flex-wrap bg-white rounded shadow">
            <div class="w-full md:w-1/4 flex flex-col items-center border-r">
                <img src="{{ getAsset('storage/david-grzyb.jpg') }}" class="rounded-full h-24 w-24 border-2 border-gray-400 shadow mt-10">
                <!-- <a href="#" class="w-full text-center border-t border-b text-gray-600 text-lg hover:bg-gray-100 py-3 mt-10">
                    <i class="far fa-file-alt mr-2"></i> My Resume
                </a> -->
            </div>
            <div class="w-full md:w-3/4 p-5">
               <h1 class="text-4xl font-bold py-2">{{ config('blog.about.name') }}</h1>
               <p class="text-gray-600 py-2">{{ config('blog.about.subtitle') }}</p>
               <p class="text-lg leading-relaxed py-3">{{ config('blog.about.description') }}</p>
            </div>
        </div>

        <div class="hidden md:flex container mx-auto bg-white rounded shadow mt-8 p-4">
            <div class="calendar md:w-full">
                <p class="text-lg italic text-center lato">Loading GitHub Data..</p>
            </div>
        </div>
    </main>

    @include('blog.partials.footer')
@endsection

@push('scripts')
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <script>new GitHubCalendar(".calendar", "davidgrzyb");</script>
@endpush

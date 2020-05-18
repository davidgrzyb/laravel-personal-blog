@extends('blog.layouts.app')

@section('title', config('blog.meta.title'))
@section('description', config('blog.meta.description'))

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-3/5 content-center">
            @include('blog.partials.navbar')
        </div>
    </div>

    <main role="main" class="flex flex-col items-center pl-8 pr-8">
        <div class="md:w-3/5 pb-8">
            @foreach($data['posts'] as $post)
                <div class="pt-10">
                    <div>
                        <h2 class="text-post-title-link-gray font-rubik text-2xl md:text-3xl">
                            <a href="{{ route('blog.post', $post->slug) }}" class="">{{ $post->title }}</a>
                        </h2>
                    </div>
                    <div class="pt-2">
                        <p class="text-post-date-gray font-rubik text-sm">
                            {{ Carbon\Carbon::parse($post->published_at)->format('M d') }} — {{ getReadTime($post->body) }}
                            @if($post->pinned)
                                | Pinned
                            @endif
                        </p>
                    </div>
                    <div class="pt-4">
                        <p class="text-post-summary-gray font-rubik text-base">
                            <a href="{{ route('blog.post', $post->slug) }}" class="">{{ $post->summary }}</a> 
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="md:w-3/5 pb-8">
            {{ $data['posts']->links('vendor.pagination.default') }}
        </div>
    </main>

    <div class="flex justify-center pl-10 pr-10">
        <div class="md:w-3/5 border-gray border-t pt-6 pb-4">
            @include('blog.partials.footer')
        </div>
    </div>
@endsection
